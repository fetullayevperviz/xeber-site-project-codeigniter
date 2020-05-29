<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');
  class Admin extends CI_Controller
  {
     public function security()
     {
        $login = $this->session->userdata('login');
        if(!$login)
        {
           redirect('admin');
        }
     }

  	 function index()
  	 {
        $login = $this->session->userdata('login');
        if($login)
        {
           redirect('admin/anasehife');
        }
  	 	  $this->load->view('back/login');
  	 }

  	 public function login()
  	 {
  	 	$email    = trim(strip_tags(htmlspecialchars($this->input->post('email'))));
  	 	$password = trim(strip_tags(htmlspecialchars($this->input->post('password'))));
  	 	$pass     = sha1(md5($password));

  	 	$control  = $this->dtbs->control($email,$password);
  	 	if($control)
  	 	{
  	 		$this->session->set_userdata('login',true);
  	 		redirect('admin/anasehife');
  	 	}
  	 	else
  	 	{
  	 		$this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                  Email və ya Şifrəniz doğru deyil..!
                </div>');
  	 		redirect('admin');
  	 	}
  	 }

  	 public function anasehife()
  	 {
        $this->security();
  	 	  $this->load->view('back/anasehife');
  	 }

     public function logout()
     {
        $this->session->sess_destroy();
        redirect('admin');
     }

     //Site Settings operation start
     
     public function settings()
     {
        $result = $this->dtbs->list('site_settings');
        $data['info'] = $result;
        $this->load->view('back/settings/anasehife',$data);
     }

     public function settings_update($id)
     {
         $result = $this->dtbs->show($id,'site_settings');
         $data['info'] = $result;
         $this->load->view('back/settings/edit/anasehife',$data);
     }

     public function settings_edit()
     {
         $id            = trim(strip_tags(htmlspecialchars($this->input->post('id'))));
         $title         = trim(strip_tags(htmlspecialchars($this->input->post('title'))));
         $url           = trim(strip_tags(htmlspecialchars($this->input->post('url'))));
         $email         = trim(strip_tags(htmlspecialchars($this->input->post('email'))));
         $phone         = trim(strip_tags(htmlspecialchars($this->input->post('phone'))));
         $site_desc     = trim(strip_tags(htmlspecialchars($this->input->post('site_desc'))));
         $site_keyword  = trim(strip_tags(htmlspecialchars($this->input->post('site_keyword'))));
         $adress        = trim(strip_tags(htmlspecialchars($this->input->post('adress'))));
         $info          = trim(strip_tags(htmlspecialchars($this->input->post('info'))));
         $data          = [
                              'id'           => $id,
                              'title'        => $title,
                              'url'          => $url,
                              'email'        => $email,
                              'phone'        => $phone,
                              'site_desc'    => $site_desc,
                              'site_keyword' => $site_keyword,
                              'adress'       => $adress,
                              'info'         => $info
                          ];
        $result = $this->dtbs->update($data,$id,'id','site_settings');
        if($result)
        {
            $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Təbriklər!</h5>
                  Site Parametrləri Yeniləndi..
                </div>');
            redirect('admin/settings');
        }
        else
        {
            $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                  Site Parametrləri Yenilənmədi..!
                </div>');
            redirect('admin/settings');
        }
     }
     
     //site settings operation end

     //social media settings start

     public function social_media()
     {
         $result = $this->dtbs->list('social');
         $data['info'] = $result;
         $this->load->view('back/social/anasehife',$data);
     }
     
     public function social_add()
     {
        $this->load->view('back/social/insert/anasehife');
     }

     public function social_insert()
     {
        $title  = trim(strip_tags(htmlspecialchars($this->input->post('title'))));
        $sef    = permalink($title);
        $url    = trim(strip_tags(htmlspecialchars($this->input->post('url'))));
        $data   = [
                    'title' => $title,
                    'sef'   => $sef,
                    'url'   => $url,
                    'status'=> 1
                  ];
        $result = $this->dtbs->insert('social',$data);
        if($result)
        {
           $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Təbriklər!</h5>
                  Sosial Şəbəkə Hesabı Əlavə Edildi..
                </div>');
            redirect('admin/social_media');
        }
        else
        {
           $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                  Sosial Şəbəkə Hesabı Əlavə Edilmədi..!
                </div>');
            redirect('admin/social_media');
        }

     }

     public function social_update($id)
     {
         $result = $this->dtbs->show($id,'social');
         $data['info'] = $result;
         $this->load->view('back/social/edit/anasehife',$data);
     }

     public function social_edit()
     {
         $id            = $this->input->post('id');
         $title         = trim(strip_tags(htmlspecialchars($this->input->post('title'))));
         $sef           = permalink($title);
         $url           = trim(strip_tags(htmlspecialchars($this->input->post('url'))));
         $data          = [
                              'id'           => $id,
                              'title'        => $title,
                              'sef'          => $sef,
                              'url'          => $url
                          ];
        $result = $this->dtbs->update($data,$id,'id','social');
        if($result)
        {
            $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Təbriklər!</h5>
                  Sosial Şəbəkə Hesabı Yeniləndi..
                </div>');
            redirect('admin/social_media');
        }
        else
        {
            $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                  Sosial Şəbəkə Hesabı Yenilənmədi..!
                </div>');
            redirect('admin/social_media');
        }
     }
     
     public function social_delete($id,$where,$from)
     {
        $result = $this->dtbs->delete($id,$where,$from);
        if($result)
        {
            $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Təbriklər!</h5>
                  Sosial Şəbəkə Hesabı Silindi..
                </div>');
            redirect('admin/social_media');
        }
        else
        {
            $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                  Sosial Şəbəkə Hesabı Silinmədi..!
                </div>');
            redirect('admin/social_media');
        }
     }

     public function social_set()
     {
        $id     = $this->input->post('id');
        $status = ($this->input->post('status')=="true") ? 1 : 0;
        $this->db->where('id',$id)->update('social',array('status'=>$status));
     }

     // Social Media operation end 
     

     //Category operation start
      
      public function categories()
      {
         $result = $this->dtbs->list('category');
         $data['info'] = $result;
         $this->load->view('back/categories/anasehife',$data);
      }
     
      public function category_add()
      {
         $this->load->view('back/categories/insert/anasehife');
      }

      public function category_insert()
     {
        $title  = trim(strip_tags(htmlspecialchars($this->input->post('title'))));
        $sef    = permalink($title);
        $data   = [
                    'title' => $title,
                    'sef'   => $sef,
                    'status'=> 1
                  ];
        $result = $this->dtbs->insert('category',$data);
        if($result)
        {
           $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Təbriklər!</h5>
                  Kateqoriya Əlavə Edildi..
                </div>');
            redirect('admin/categories');
        }
        else
        {
           $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                  Kateqoriya Əlavə Edilmədi..!
                </div>');
            redirect('admin/categories');
        }

     }

     public function category_update($id)
     {
         $result = $this->dtbs->show($id,'category');
         $data['info'] = $result;
         $this->load->view('back/categories/edit/anasehife',$data);
     }

     public function category_edit()
     {
         $id            = $this->input->post('id');
         $title         = trim(strip_tags(htmlspecialchars($this->input->post('title'))));
         $sef           = permalink($title);
         $data          = [
                              'id'           => $id,
                              'title'        => $title,
                              'sef'          => $sef
                          ];
        $result = $this->dtbs->update($data,$id,'id','category');
        if($result)
        {
            $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Təbriklər!</h5>
                  Kateqoriya Yeniləndi..
                </div>');
            redirect('admin/categories');
        }
        else
        {
            $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                  Kateqoriya Yenilənmədi..!
                </div>');
            redirect('admin/categories');
        }
     }

     public function category_delete($id,$where,$from)
     {
        $result = $this->dtbs->delete($id,$where,$from);
        if($result)
        {
            $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Təbriklər!</h5>
                  Kateqoriya Silindi..
                </div>');
            redirect('admin/categories');
        }
        else
        {
            $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                  Kateqoriay Silinmədi..!
                </div>');
            redirect('admin/categories');
        }
     }

     public function category_set()
     {
        $id     = $this->input->post('id');
        $status = ($this->input->post('status')=="true") ? 1 : 0;
        $this->db->where('id',$id)->update('category',array('status'=>$status));
     }

     //Categories operation end
     

     //News operation start
      
     public function news()
     {
       $result = $this->dtbs->list('news');
       $data['info'] = $result;
       $this->load->view('back/news/anasehife',$data);
     }

      public function news_add()
      {
         $result = $this->dtbs->list('category');
         $data['info'] = $result;
         $this->load->view('back/news/insert/anasehife', $data);
      }

      public function news_insert()
      {
         $title  = trim(strip_tags(htmlspecialchars($this->input->post('title'))));
         $sef    = permalink($title);
         $cat_id = $this->input->post('cat_id');
         if($cat_id==1)
         {
            $category = 'Son';
         }
         elseif($cat_id==2)
         {
           $category = 'Sosial';
         }
         elseif($cat_id==3)
         {
           $category = 'Siyasət';
         }
         elseif($cat_id==4)
         {
           $category = 'İqtisadiyyat';
         }
         elseif($cat_id==5)
         {
           $category = 'Cəmiyyət';
         }
         elseif($cat_id==6)
         {
           $category = 'İdman';
         }
         elseif($cat_id==7)
         {
           $category = 'Dünya';
         }

         $catsef      = permalink($category);
         $news_date   = trim(strip_tags(htmlspecialchars($this->input->post('news_date'))));
         $com_status  = trim(strip_tags(htmlspecialchars($this->input->post('com_status'))));
         $editor1   =   trim(strip_tags(htmlspecialchars($this->input->post('editor1'))));
         $last_minute = trim(strip_tags(htmlspecialchars($this->input->post('last_minute'))));
         $news_tag    = trim(strip_tags(htmlspecialchars($this->input->post('news_tag'))));
         $hit         = 0;
         $status      = 1;

         $config['upload_path']   = FCPATH.'assets/front/images/news';
         $config['allowed_types'] = '*';
         $config['encrypt_name']  = TRUE;
         $this->load->library('upload', $config);
         
         if($this->upload->do_upload('image'))
         {
           //tmb operation start
           $image                    = $this->upload->data();
           $image_path               = $image['file_name'];
           $image_save               = 'assets/front/images/news/'.$image_path.'';
           $image_tmb                = 'assets/front/images/news/tmb/'.$image_path.'';
           $image_mini               = 'assets/front/images/news/mini/'.$image_path.'';
           $config['image_library']  = 'gd2';
           $config['source_image']   = 'assets/front/images/news/'.$image_path.'';
           $config['new_image']      = 'assets/front/images/news/tmb/'.$image_path.'';
           $config['create_thumb']   = false;
           $config['maintain_ratio'] = false;
           $config['quality']        = '60%';
           $config['width']          = 409;
           $config['height']         = 260;
           $this->load->library('image_lib',$config);
           $this->image_lib->initialize($config);
           $this->image_lib->resize();
           $this->image_lib->clear();
           //tmb operation end
           
           //mini opeation start
           $config1['image_library']  = 'gd2';
           $config1['source_image']   = 'assets/front/images/news/'.$image_path.'';
           $config1['new_image']      = 'assets/front/images/news/mini/'.$image_path.'';
           $config1['create_thumb']   = false;
           $config1['maintain_ratio'] = false;
           $config1['quality']        = '60%';
           $config1['width']          = 94;
           $config1['height']         = 73;
           $this->load->library('image_lib',$config1);
           $this->image_lib->initialize($config1);
           $this->image_lib->resize();
           $this->image_lib->clear();
           
           $data = [
                      'image'=>$image_save,
                      'tmb'=>$image_tmb,
                      'mini'=>$image_mini,
                      'title'=>$title,
                      'sef'=>$sef,
                      'cat_id'=>$cat_id,
                      'category'=>$category,
                      'catsef'=>$catsef,
                      'news_date'=>$news_date,
                      'news_text'=>$editor1,
                      'com_status'=>$com_status,
                      'last_minute'=>$last_minute,
                      'news_tag'=>$news_tag,
                      'hit'=>$hit,
                      'status'=>$status
                   ];
            $result = $this->dtbs->insert('news',$data);
            if($result)
            {
                $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-check"></i> Təbriklər!</h5>
                      Xəbər Əlavə Edildi..
                      </div>');
                redirect('admin/news');
            }
            else
            {
                $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                      Xəbər Əlavə Edilmədi..!
                      </div>');
                redirect('admin/news');
            }
         }
         /*else{
              $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                  Şəkil Əlavə Edilmədi..!
                  </div>');
              redirect('admin/news');
         }*/
      }
       
       public function news_set()
       {
          $id     = $this->input->post('id');
          $status = ($this->input->post('status')=="true") ? 1 : 0;
          $this->db->where('id',$id)->update('news',array('status'=>$status));
       }

       public function news_update($id)
       {  
          $result = $this->dtbs->show($id,'news');
          $data['info'] = $result;
          $this->load->view('back/news/edit/anasehife',$data);
       }

       public function news_edit()
       {
         $id     = $this->input->post('id');
         $status = $this->input->post('status');
         //tmb operation start
         $title  = trim(strip_tags(htmlspecialchars($this->input->post('title'))));
         $sef    = permalink($title);
         $cat_id = $this->input->post('cat_id');
         if($cat_id==1)
         {
            $category = 'Son';
         }
         elseif($cat_id==2)
         {
           $category = 'Sosial';
         }
         elseif($cat_id==3)
         {
           $category = 'Siyasət';
         }
         elseif($cat_id==4)
         {
           $category = 'İqtisadiyyat';
         }
         elseif($cat_id==5)
         {
           $category = 'Cəmiyyət';
         }
         elseif($cat_id==6)
         {
           $category = 'İdman';
         }
         elseif($cat_id==7)
         {
           $category = 'Dünya';
         }
         $catsef      = permalink($category);
         $news_date   = $this->input->post('news_date');
         $com_status  = $this->input->post('com_status');
         $editor1     = trim(strip_tags(htmlspecialchars($this->input->post('editor1'))));
         $last_minute = $this->input->post('last_minute');
         $news_tag    = trim(strip_tags(htmlspecialchars($this->input->post('news_tag'))));

         $config['upload_path']   = FCPATH.'assets/front/images/news';
         $config['allowed_types'] = '*';
         $config['encrypt_name']  = TRUE;
         $this->load->library('upload', $config);
         
         if($this->upload->do_upload('image'))
         {
           //tmb operation start
           $image                    = $this->upload->data();
           $image_path               = $image['file_name'];
           $image_save               = 'assets/front/images/news/'.$image_path.'';
           $image_tmb                = 'assets/front/images/news/tmb/'.$image_path.'';
           $image_mini               = 'assets/front/images/news/mini/'.$image_path.'';
           $config['image_library']  = 'gd2';
           $config['source_image']   = 'assets/front/images/news/'.$image_path.'';
           $config['new_image']      = 'assets/front/images/news/tmb/'.$image_path.'';
           $config['create_thumb']   = false;
           $config['maintain_ratio'] = false;
           $config['quality']        = '60%';
           $config['width']          = 409;
           $config['height']         = 260;
           $this->load->library('image_lib',$config);
           $this->image_lib->initialize($config);
           $this->image_lib->resize();
           $this->image_lib->clear();
           //tmb operation end
           
           //mini opeation start
           $config1['image_library']  = 'gd2';
           $config1['source_image']   = 'assets/front/images/news/'.$image_path.'';
           $config1['new_image']      = 'assets/front/images/news/mini/'.$image_path.'';
           $config1['create_thumb']   = false;
           $config1['maintain_ratio'] = false;
           $config1['quality']        = '60%';
           $config1['width']          = 94;
           $config1['height']         = 73;
           $this->load->library('image_lib',$config1);
           $this->image_lib->initialize($config1);
           $this->image_lib->resize();
           $this->image_lib->clear();

           $image_delete      = news_image($id);
           $tmb_image_delete  = news_tmb_image($id);
           $mini_image_delete = news_mini_image($id);
           unlink($image_delete);
           unlink($tmb_image_delete);
           unlink($mini_image_delete);
           
           $data = [
                      'image'=>$image_save,
                      'tmb'=>$image_tmb,
                      'mini'=>$image_mini,
                      'title'=>$title,
                      'sef'=>$sef,
                      'cat_id'=>$cat_id,
                      'category'=>$category,
                      'catsef'=>$catsef,
                      'news_date'=>$news_date,
                      'news_text'=>$editor1,
                      'com_status'=>$com_status,
                      'last_minute'=>$last_minute,
                      'news_tag'=>$news_tag,
                      'status'=>$status
                   ];
            $result = $this->dtbs->update($data,$id,'id','news');
            if($result)
            {
                $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-check"></i> Təbriklər!</h5>
                      Xəbər Yeniləndi..
                      </div>');
                redirect('admin/news');
            }
            else
            {
                $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                      Xəbər Yenilənmədi..!
                      </div>');
                redirect('admin/news');
            }
         }
         else{
              $data = [
                        'title'=>$title,
                        'sef'=>$sef,
                        'cat_id'=>$cat_id,
                        'category'=>$category,
                        'catsef'=>$catsef,
                        'news_date'=>$news_date,
                        'news_text'=>$editor1,
                        'com_status'=>$com_status,
                        'last_minute'=>$last_minute,
                        'news_tag'=>$news_tag,
                        'status'=>$status
                     ];
            $result = $this->dtbs->update($data,$id,'id','news',);
            if($result)
            {
                $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-check"></i> Təbriklər!</h5>
                      Xəbər Yeniləndi..
                      </div>');
                redirect('admin/news');
            }
            else
            {
                $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                      Xəbər Yenilənmədi..!
                      </div>');
                redirect('admin/news');
            }
         }
       }

       public function news_delete($id,$where,$from)
       {

          $image_delete      = news_image($id);
          $tmb_image_delete  = news_tmb_image($id);
          $mini_image_delete = news_mini_image($id);
          unlink($image_delete);
          unlink($tmb_image_delete);
          unlink($mini_image_delete);

          $result = $this->dtbs->delete($id,$where,$from);
          if($result)
          {
              $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Təbriklər!</h5>
                    Xəbər Silindi..
                  </div>');
              redirect('admin/news');
          }
          else
          {
              $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                    Xəbər Silinmədi..!
                  </div>');
              redirect('admin/news');
          }
       }

       //news operation end
       

       //kose yazarlari operation start
       
       public function k_yazar()
       {
          $result = $this->dtbs->list('k_yazar');
          $data['info'] = $result;
          $this->load->view('back/k_yazar/anasehife',$data);
       }

       public function k_yazar_set()
       {
          $id     = $this->input->post('id');
          $status = ($this->input->post('status')=="true") ? 1 : 0;
          $this->db->where('id',$id)->update('k_yazar',array('status'=>$status));
       }

       public function k_yazar_add()
       {
         $result = $this->dtbs->list('k_yazar');
         $data['info'] = $result;
         $this->load->view('back/k_yazar/insert/anasehife', $data);
       }

       public function k_yazar_insert()
       {
         $config['upload_path']   = FCPATH.'assets/front/images/koseyazari';
         $config['allowed_types'] = '*';
         $config['encrypt_name']  = TRUE;
         $this->load->library('upload', $config);
         
         if($this->upload->do_upload('image'))
         {
           //tmb operation start
           $image                    = $this->upload->data();
           $image_path               = $image['file_name'];
           $image_save               = 'assets/front/images/koseyazari/'.$image_path.'';
           $image_mini               = 'assets/front/images/koseyazari/mini/'.$image_path.'';
           $config['image_library']  = 'gd2';
           $config['source_image']   = 'assets/front/images/koseyazari/'.$image_path.'';
           $config['new_image']      = 'assets/front/images/koseyazari/mini/'.$image_path.'';
           $config['create_thumb']   = false;
           $config['maintain_ratio'] = false;
           $config['quality']        = '60%';
           $config['width']          = 94;
           $config['height']         = 73;
           $this->load->library('image_lib',$config);
           $this->image_lib->initialize($config);
           $this->image_lib->resize();
           $this->image_lib->clear();
           //tmb operation end
            $data =  [
                      'image'=>$image_save,
                      'mini'=>$image_mini,
                      'fullname'=> $this->input->post('fullname',true),
                      'status' => $status = 1
                    ];
            $result = $this->dtbs->insert('k_yazar',$data);
            if($result)
            {
                $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-check"></i> Təbriklər!</h5>
                      Köşə Yazarı Əlavə Edildi..
                      </div>');
                redirect('admin/k_yazar');
            }
            else
            {
                $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                      Köşə Yazarı Əlavə Edilmədi..!
                      </div>');
                redirect('admin/k_yazar');
            }

       }
     }

     public function k_yazar_update($id)
     {  
        $result = $this->dtbs->show($id,'k_yazar');
        $data['info'] = $result;
        $this->load->view('back/k_yazar/edit/anasehife',$data);
     }

     public function k_yazar_edit()
     {
         $id     = $this->input->post('id');
         $status = $this->input->post('status');

         $config['upload_path']   = FCPATH.'assets/front/images/koseyazari';
         $config['allowed_types'] = '*';
         $config['encrypt_name']  = TRUE;
         $this->load->library('upload', $config);
         
         if($this->upload->do_upload('image'))
         {
           //tmb operation start
           $image                    = $this->upload->data();
           $image_path               = $image['file_name'];
           $image_save               = 'assets/front/images/koseyazari/'.$image_path.'';
           $image_mini               = 'assets/front/images/koseyazari/mini/'.$image_path.'';
           $config['image_library']  = 'gd2';
           $config['source_image']   = 'assets/front/images/koseyazari/'.$image_path.'';
           $config['new_image']      = 'assets/front/images/koseyazari/mini/'.$image_path.'';
           $config['create_thumb']   = false;
           $config['maintain_ratio'] = false;
           $config['quality']        = '60%';
           $config['width']          = 94;
           $config['height']         = 73;
           $this->load->library('image_lib',$config);
           $this->image_lib->initialize($config);
           $this->image_lib->resize();
           $this->image_lib->clear();
           //tmb operation end
           
           $image_delete      = k_yazar_image($id);
           $mini_image_delete = k_yazar_mini_image($id);
           unlink($image_delete);
           unlink($mini_image_delete);

            $data = [
                      'image'=>$image_save,
                      'mini'=>$image_mini,
                      'fullname'=> trim(strip_tags(htmlspecialchars($this->input->post('fullname')))),
                      'status' => $status
                    ];
            $result = $this->dtbs->update($data,$id,'id','k_yazar');
            if($result)
            {
              $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Təbriklər!</h5>
                    Köşə Yazarı Yeniləndi..
                    </div>');
              redirect('admin/k_yazar');
            }
            else
            {
              $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                    Köşə Yazarı Yenilənmədi..!
                    </div>');
              redirect('admin/k_yazar');
            }

        }
        else
        {
            $data = [
                      'fullname'=> trim(strip_tags(htmlspecialchars($this->input->post('fullname')))),
                      'status' => $status
                    ];
            $result = $this->dtbs->update($data,$id,'id','k_yazar');
            if($result)
            {
              $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Təbriklər!</h5>
                    Köşə Yazarı Yeniləndi..
                    </div>');
              redirect('admin/k_yazar');
            }
            else
            {
              $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                    Köşə Yazarı Yenilənmədi..!
                    </div>');
              redirect('admin/k_yazar');
            }

        }

     }

      public function k_yazar_delete($id,$where,$from)
       {

          $image_delete      = k_yazar_image($id);
          $mini_image_delete = k_yazar_mini_image($id);
          unlink($image_delete);
          unlink($mini_image_delete);

          $result = $this->dtbs->delete($id,$where,$from);
          if($result)
          {
              $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Təbriklər!</h5>
                    Köşə Yazarı Silindi..
                  </div>');
              redirect('admin/k_yazar');
          }
          else
          {
              $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                    Köşə Yazarı Silinmədi..!
                  </div>');
              redirect('admin/k_yazar');
          }
       }

       //kose yazari operation end
       
       
     //reklam operation start
    
     public function reklam()
     {
        $result = $this->dtbs->list('reklam');
        $data['info'] = $result;
        $this->load->view('back/reklam/anasehife',$data);
     }

      public function reklam_set()
      {
          $id     = $this->input->post('id');
          $status = ($this->input->post('status')=="true") ? 1 : 0;
          $this->db->where('id',$id)->update('reklam',array('status'=>$status));
      }

       public function reklam_add()
       {
         $result = $this->dtbs->list('reklam');
         $data['info'] = $result;
         $this->load->view('back/reklam/insert/anasehife', $data);
       }

       public function reklam_insert()
       {
         $config['upload_path']   = FCPATH.'assets/front/images/reklam';
         $config['allowed_types'] = '*';
         $config['encrypt_name']  = TRUE;
         $this->load->library('upload', $config);
         
         if($this->upload->do_upload('image'))
         {
           //tmb operation start
           $image                    = $this->upload->data();
           $image_path               = $image['file_name'];
           $image_save               = 'assets/front/images/reklam/'.$image_path.'';
           $image_tmb                = 'assets/front/images/reklam/tmb/'.$image_path.'';
           $config['image_library']  = 'gd2';
           $config['source_image']   = 'assets/front/images/reklam/'.$image_path.'';
           $config['new_image']      = 'assets/front/images/reklam/tmb/'.$image_path.'';
           $config['create_thumb']   = false;
           $config['maintain_ratio'] = false;
           $config['quality']        = '60%';
           $config['width']          = 729;
           $config['height']         = 90;
           $this->load->library('image_lib',$config);
           $this->image_lib->initialize($config);
           $this->image_lib->resize();
           $this->image_lib->clear();
           //tmb operation end
            $data =  [
                      'image'      => $image_save,
                      'tmb'        => $image_tmb,
                      'firma'      => $this->input->post('firma',true),
                      'link'       => $this->input->post('link',true),
                      'start_date' => $this->input->post('start_date',true),
                      'end_date'   => $this->input->post('end_date',true),
                      'status'     => $status = 1
                    ];
            $result = $this->dtbs->insert('reklam',$data);
            if($result)
            {
                $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-check"></i> Təbriklər!</h5>
                      Reklam Əlavə Edildi..
                      </div>');
                redirect('admin/reklam');
            }
            else
            {
                $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                      Reklam Əlavə Edilmədi..!
                      </div>');
                redirect('admin/reklam');
            }

       }
       }

     public function reklam_update($id)
     {
         $result       = $this->dtbs->show($id,'reklam');
         $data['info'] = $result;
         $this->load->view('back/reklam/edit/anasehife',$data);
     }

     public function reklam_edit()
     {
         $id     = $this->input->post('id');
         $status = $this->input->post('status');

         $config['upload_path']   = FCPATH.'assets/front/images/reklam';
         $config['allowed_types'] = '*';
         $config['encrypt_name']  = TRUE;
         $this->load->library('upload', $config);
         
         if($this->upload->do_upload('image'))
         {
           //tmb operation start
           $image                    = $this->upload->data();
           $image_path               = $image['file_name'];
           $image_save               = 'assets/front/images/reklam/'.$image_path.'';
           $image_tmb               = 'assets/front/images/reklam/tmb/'.$image_path.'';
           $config['image_library']  = 'gd2';
           $config['source_image']   = 'assets/front/images/reklam/'.$image_path.'';
           $config['new_image']      = 'assets/front/images/reklam/tmb/'.$image_path.'';
           $config['create_thumb']   = false;
           $config['maintain_ratio'] = false;
           $config['quality']        = '60%';
           $config['width']          = 729;
           $config['height']         = 90;
           $this->load->library('image_lib',$config);
           $this->image_lib->initialize($config);
           $this->image_lib->resize();
           $this->image_lib->clear();
           //tmb operation end
           
           $image_delete      = reklam_image($id);
           $tmb_image_delete  = reklam_tmb_image($id);
           unlink($image_delete);
           unlink($tmb_image_delete);

            $data = [
                      'image'      => $image_save,
                      'tmb'        => $image_tmb,
                      'firma'      => trim(strip_tags(htmlspecialchars($this->input->post('firma')))),
                      'link'       => trim(strip_tags(htmlspecialchars($this->input->post('link')))),
                      'start_date' => $this->input->post('start_date'),
                      'end_date'   => $this->input->post('end_date'),
                      'status'     => $status
                    ];
            $result = $this->dtbs->update($data,$id,'id','reklam');
            if($result)
            {
              $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Təbriklər!</h5>
                    Reklam Yeniləndi..
                    </div>');
              redirect('admin/reklam');
            }
            else
            {
              $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                    Reklam Yenilənmədi..!
                    </div>');
              redirect('admin/reklam');
            }

        }
        else
        {
            $data = [
                      'id'         => $this->input->post('id'),
                      'firma'      => trim(strip_tags(htmlspecialchars($this->input->post('firma')))),
                      'link'       => trim(strip_tags(htmlspecialchars($this->input->post('link')))),
                      'start_date' => $this->input->post('start_date'),
                      'end_date'   => $this->input->post('end_date'),
                      'status'     => $status
                    ];
            $result = $this->dtbs->update($data,$id,'id','reklam');
            if($result)
            {
              $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Təbriklər!</h5>
                    Reklam Yeniləndi..
                    </div>');
              redirect('admin/reklam');
            }
            else
            {
              $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                    Reklam Yenilənmədi..!
                    </div>');
              redirect('admin/reklam');
            }

        }

     }

       public function reklam_delete($id,$where,$from)
       {

          $image_delete      = reklam_image($id);
          $tmb_image_delete  = reklam_tmb_image($id);
          unlink($image_delete);
          unlink($tmb_image_delete);

          $result = $this->dtbs->delete($id,$where,$from);
          if($result)
          {
              $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Təbriklər!</h5>
                    Reklam Silindi..
                  </div>');
              redirect('admin/reklam');
          }
          else
          {
              $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                    Reklam Silinmədi..!
                  </div>');
              redirect('admin/reklam');
          }
       }
     
     //reklam operation end
     
     //comment operation start

     public function comment()
     {
        $result = $this->dtbs->list('comment');
        $data['info'] = $result;
        $this->load->view('back/comment/anasehife',$data);
     }

      public function comment_set()
      {
          $id     = $this->input->post('id');
          $status = ($this->input->post('status')=="true") ? 1 : 0;
          $this->db->where('id',$id)->update('comment',array('status'=>$status));
      }

     public function comment_update($id)
     {
         $result       = $this->dtbs->show($id,'comment');
         $data['info'] = $result;
         $this->load->view('back/comment/edit/anasehife',$data);
     }
     
     public function comment_edit()
     {
         $id            = $this->input->post('id');
         $fullname      = trim(strip_tags(htmlspecialchars($this->input->post('fullname'))));
         $comment       = trim(strip_tags(htmlspecialchars($this->input->post('comment'))));
         $data          = [
                              'id'           => $id,
                              'fullname'     => $fullname,
                              'comment'      => $comment
                          ];
        $result = $this->dtbs->update($data,$id,'id','comment');
        if($result)
        {
            $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Təbriklər!</h5>
                 Rəy Yeniləndi..
                </div>');
            redirect('admin/comment');
        }
        else
        {
            $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                  Rəy Yenilənmədi..!
                </div>');
            redirect('admin/comment');
        }
     }

       public function comment_delete($id,$where,$from)
       {

          $result = $this->dtbs->delete($id,$where,$from);
          if($result)
          {
              $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Təbriklər!</h5>
                    Rəy Silindi..
                  </div>');
              redirect('admin/comment');
          }
          else
          {
              $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                    Rəy Silinmədi..!
                  </div>');
              redirect('admin/comment');
          }
       }

       //comment operation end
       

       //message operation start 
       
     public function message()
     {
        $result = $this->dtbs->list('message');
        $data['info'] = $result;
        $this->load->view('back/message/anasehife',$data);
     }

     public function message_read($id)
     {
         $result       = $this->dtbs->show($id,'message');
         if($result)
         {
            $data['result'] = $result;
            $this->load->view('back/message/edit/anasehife',$data);
            $data = array('status'=>1);
            $this->dtbs->message_update($result['id'],$data);

         }
         
     }


     public function message_delete($id,$where,$from)
     {

        $result = $this->dtbs->delete($id,$where,$from);
        if($result)
        {
            $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Təbriklər!</h5>
                  Mesaj Silindi..
                </div>');
            redirect('admin/message');
        }
        else
        {
            $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> XƏTA!</h5>
                  Mesaj Silinmədi..!
                </div>');
            redirect('admin/message');
        }
     }

     public function news_details($id)
     {  
        $result = $this->dtbs->show($id,'news');
        $data['info'] = $result;
        $this->load->view('back/news_read/anasehife',$data);
     }


  }
 ?>