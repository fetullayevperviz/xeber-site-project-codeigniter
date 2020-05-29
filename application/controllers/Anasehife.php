<?php 
    class Anasehife extends CI_Controller
    {
    	public function index()
    	{
    		$result = $this->dtbs->xebersayi();
    		$key    = $this->input->get('search',true);
    		if($key != "") {
    			$news   = $this->dtbs->xeber_axtar($key);
    			$data['search_xeber'] = $news;
    		}
    		$this->load->library('pagination');
    		$config['base_url'] = base_url().'anasehife/';
    		$config['total_rows'] = $result;
    		$config['per_page'] = 10;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_tag_open'] = '<li>';
            $config['last_tag_open'] = '<li>';
            $config['next_tag_open'] = '<li>';
            $config['prev_tag_open'] = '<li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_close'] = '</li>';
            $config['next_tag_close'] = '</li>';
            $config['prev_tag_close'] = '</li>';
            $config['cur_tag_open'] = "<li class=\"active\"><span><b>";
            $config['cur_tag_close'] = "</b></span></li>";
            $this->pagination->initialize($config);
    		$data['xeber'] = $this->dtbs->xebergetir($config['per_page'],$this->uri->segment(2,0));
    		$this->load->view('anasehife', $data);
    	}

        public function siyaset()
        {
            $result = $this->dtbs->xebersayi();
            $key    = $this->input->get('search',true);
            if($key != "") {
                $news   = $this->dtbs->xeber_axtar($key);
                $data['search_xeber'] = $news;
            }
            $this->load->library('pagination');
            $config['base_url'] = base_url().'anasehife/';
            $config['total_rows'] = $result;
            $config['per_page'] = 10;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_tag_open'] = '<li>';
            $config['last_tag_open'] = '<li>';
            $config['next_tag_open'] = '<li>';
            $config['prev_tag_open'] = '<li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_close'] = '</li>';
            $config['next_tag_close'] = '</li>';
            $config['prev_tag_close'] = '</li>';
            $config['cur_tag_open'] = "<li class=\"active\"><span><b>";
            $config['cur_tag_close'] = "</b></span></li>";
            $this->pagination->initialize($config);
            $data['info'] = $this->dtbs->siyasetgetir($config['per_page'],$this->uri->segment(3,0));
            $this->load->view('front/siyaset/anasehife',$data);
        }

        public function sosial()
        {
            $result = $this->dtbs->xebersayi();
            $key    = $this->input->get('search',true);
            if($key != "") {
                $news   = $this->dtbs->xeber_axtar($key);
                $data['search_xeber'] = $news;
            }
            $this->load->library('pagination');
            $config['base_url'] = base_url().'anasehife/';
            $config['total_rows'] = $result;
            $config['per_page'] = 10;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_tag_open'] = '<li>';
            $config['last_tag_open'] = '<li>';
            $config['next_tag_open'] = '<li>';
            $config['prev_tag_open'] = '<li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_close'] = '</li>';
            $config['next_tag_close'] = '</li>';
            $config['prev_tag_close'] = '</li>';
            $config['cur_tag_open'] = "<li class=\"active\"><span><b>";
            $config['cur_tag_close'] = "</b></span></li>";
            $this->pagination->initialize($config);
            $data['info'] = $this->dtbs->sosialgetir($config['per_page'],$this->uri->segment(3,0));
            $this->load->view('front/sosial/anasehife',$data);
        }

        public function iqtisadiyyat()
        {
           $result = $this->dtbs->xebersayi();
            $key    = $this->input->get('search',true);
            if($key != "") {
                $news   = $this->dtbs->xeber_axtar($key);
                $data['search_xeber'] = $news;
            }
            $this->load->library('pagination');
            $config['base_url'] = base_url().'anasehife/';
            $config['total_rows'] = $result;
            $config['per_page'] = 10;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_tag_open'] = '<li>';
            $config['last_tag_open'] = '<li>';
            $config['next_tag_open'] = '<li>';
            $config['prev_tag_open'] = '<li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_close'] = '</li>';
            $config['next_tag_close'] = '</li>';
            $config['prev_tag_close'] = '</li>';
            $config['cur_tag_open'] = "<li class=\"active\"><span><b>";
            $config['cur_tag_close'] = "</b></span></li>";
            $this->pagination->initialize($config);
            $data['info'] = $this->dtbs->iqtisadiyyatgetir($config['per_page'],$this->uri->segment(3,0));
            $this->load->view('front/iqtisadiyyat/anasehife',$data);
        }

        public function cemiyyet()
        {
            $result = $this->dtbs->xebersayi();
            $key    = $this->input->get('search',true);
            if($key != "") {
                $news   = $this->dtbs->xeber_axtar($key);
                $data['search_xeber'] = $news;
            }
            $this->load->library('pagination');
            $config['base_url'] = base_url().'anasehife/';
            $config['total_rows'] = $result;
            $config['per_page'] = 10;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_tag_open'] = '<li>';
            $config['last_tag_open'] = '<li>';
            $config['next_tag_open'] = '<li>';
            $config['prev_tag_open'] = '<li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_close'] = '</li>';
            $config['next_tag_close'] = '</li>';
            $config['prev_tag_close'] = '</li>';
            $config['cur_tag_open'] = "<li class=\"active\"><span><b>";
            $config['cur_tag_close'] = "</b></span></li>";
            $this->pagination->initialize($config);
            $data['info'] = $this->dtbs->cemiyyetgetir($config['per_page'],$this->uri->segment(3,0));
            $this->load->view('front/cemiyyet/anasehife',$data);
        }

        public function idman()
        {
           $result = $this->dtbs->xebersayi();
            $key    = $this->input->get('search',true);
            if($key != "") {
                $news   = $this->dtbs->xeber_axtar($key);
                $data['search_xeber'] = $news;
            }
            $this->load->library('pagination');
            $config['base_url'] = base_url().'anasehife/';
            $config['total_rows'] = $result;
            $config['per_page'] = 10;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_tag_open'] = '<li>';
            $config['last_tag_open'] = '<li>';
            $config['next_tag_open'] = '<li>';
            $config['prev_tag_open'] = '<li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_close'] = '</li>';
            $config['next_tag_close'] = '</li>';
            $config['prev_tag_close'] = '</li>';
            $config['cur_tag_open'] = "<li class=\"active\"><span><b>";
            $config['cur_tag_close'] = "</b></span></li>";
            $this->pagination->initialize($config);
            $data['info'] = $this->dtbs->idmangetir($config['per_page'],$this->uri->segment(3,0));
            $this->load->view('front/idman/anasehife',$data);
        }

        public function dunya()
        {
            $result = $this->dtbs->xebersayi();
            $key    = $this->input->get('search',true);
            if($key != "") {
                $news   = $this->dtbs->xeber_axtar($key);
                $data['search_xeber'] = $news;
            }
            $this->load->library('pagination');
            $config['base_url'] = base_url().'anasehife/';
            $config['total_rows'] = $result;
            $config['per_page'] = 10;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_tag_open'] = '<li>';
            $config['last_tag_open'] = '<li>';
            $config['next_tag_open'] = '<li>';
            $config['prev_tag_open'] = '<li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_close'] = '</li>';
            $config['next_tag_close'] = '</li>';
            $config['prev_tag_close'] = '</li>';
            $config['cur_tag_open'] = "<li class=\"active\"><span><b>";
            $config['cur_tag_close'] = "</b></span></li>";
            $this->pagination->initialize($config);
            $data['info'] = $this->dtbs->dunyagetir($config['per_page'],$this->uri->segment(3,0));
            $this->load->view('front/dunya/anasehife',$data);
        }

        public function siyaset_details($sef)
        {
            $result = $this->dtbs->hit(urldecode($sef));
            $hit    = $result['hit']+1;
            $id     = $result['id'];
            $data   = ['id'=>$id,'hit'=>$hit];
            $this->dtbs->update($data,$id,'id','news');
            $result = $this->dtbs->news_details(urldecode($sef));
            $data['info'] = $result;
            $this->load->view('front/siyaset/details/anasehife',$data);
        }

        public function sosial_details($sef)
        {
            $result = $this->dtbs->hit(urldecode($sef));
            $hit    = $result['hit']+1;
            $id     = $result['id'];
            $data   = ['id'=>$id,'hit'=>$hit];
            $this->dtbs->update($data,$id,'id','news');
            $result = $this->dtbs->news_details(urldecode($sef));
            $data['info'] = $result;
            $this->load->view('front/sosial/details/anasehife',$data);
        }

        public function iqtisadiyyat_details($sef)
        {
            $result = $this->dtbs->hit(urldecode($sef));
            $hit    = $result['hit']+1;
            $id     = $result['id'];
            $data   = ['id'=>$id,'hit'=>$hit];
            $this->dtbs->update($data,$id,'id','news');
            $result = $this->dtbs->news_details(urldecode($sef));
            $data['info'] = $result;
            $this->load->view('front/iqtisadiyyat/details/anasehife',$data);
        }

        public function idman_details($sef)
        {
            $result = $this->dtbs->hit(urldecode($sef));
            $hit    = $result['hit']+1;
            $id     = $result['id'];
            $data   = ['id'=>$id,'hit'=>$hit];
            $this->dtbs->update($data,$id,'id','news');
            $result = $this->dtbs->news_details(urldecode($sef));
            $data['info'] = $result;
            $this->load->view('front/idman/details/anasehife',$data);
        }

        public function dunya_details($sef)
        {
            $result = $this->dtbs->hit(urldecode($sef));
            $hit    = $result['hit']+1;
            $id     = $result['id'];
            $data   = ['id'=>$id,'hit'=>$hit];
            $this->dtbs->update($data,$id,'id','news');
            $result = $this->dtbs->news_details(urldecode($sef));
            $data['info'] = $result;
            $this->load->view('front/dunya/details/anasehife',$data);
        }

        public function cemiyyet_details($sef)
        {
            $result = $this->dtbs->hit(urldecode($sef));
            $hit    = $result['hit']+1;
            $id     = $result['id'];
            $data   = ['id'=>$id,'hit'=>$hit];
            $this->dtbs->update($data,$id,'id','news');
            $result = $this->dtbs->news_details(urldecode($sef));
            $data['info'] = $result;
            $this->load->view('front/cemiyyet/details/anasehife',$data);
        }

        public function comments()
        {
            $this->load->library('form_validation');
            $this->load->helper('security');
            $this->form_validation->set_rules('fullname','ad soyad','trim|required|min_length[5]|xss_clean');
            $this->form_validation->set_rules('email','emailiniz','trim|required|valid_email|xss_clean');
            $this->form_validation->set_rules('comment', 'rəyiniz', 'trim|required|xss_clean');
            $xetalar = array(
                             'required'    => "{field} xanalarını doldurmaq məcburidir",
                             'min_length'  => "ad soyad ən az 5 hərf olmalıdır",
                             'valid_email' => "{field} - email adresini doğru yazın..!"
                            );
            $this->form_validation->set_message($xetalar);
            if ($this->form_validation->run() == FALSE) 
            {
                $this->session->set_flashdata('info','<div class="quote">
                                                            <blockquote>
                                                                <div class="quote-inner">
                                                                    <div class="post-inner-content">
                                                                    <p>
                                                                      '.$xetalar['info']=validation_errors().'
                                                                    </p>
                                                                    </div>
                                                                </div>
                                                            </blockquote>
                                                        </div>');
                redirect($_SERVER['HTTP_REFERER']);
            } 
            else 
            {
            
                $fullname    = $this->input->post('fullname',true);
                $email       = $this->input->post('email',true);
                $comment     = $this->input->post('comment',true);
                $subject_id  = $this->input->post('subject_id');
                $subject_sef = $this->input->post('subject_sef');
                $subject_cat = $this->input->post('subject_cat');
                $ip          = $this->input->post('ip');
                $status      = 0;
                $c_date      = date('d-m-Y');
                $data = [
                          'fullname'    => $fullname,
                          'email'       => $email,
                          'comment'     => $comment,
                          'subject_id'  => $subject_id,
                          'subject_sef' => $subject_sef,
                          'subject_cat' => $subject_cat,
                          'ip'          => $ip,
                          'status'      => $status,
                          'c_date'      => $c_date
                        ];

                $result = $this->dtbs->insert('comment',$data);
                if($result)
                {
                    $this->session->set_flashdata('info', '<div class="quote">
                                                            <blockquote>
                                                                <div class="quote-inner">
                                                                    <div class="post-inner-content">
                                                                        <strong>Təşəkkürlər</strong>
                                                                        <p>Rəyiniz təsdiqləndikdən sonra paylaşılacaq..</p>
                                                                    </div>
                                                                </div>
                                                            </blockquote>
                                                        </div>');
                    redirect($_SERVER['HTTP_REFERER']);
                }
                else
                {
                    $this->session->set_flashdata('info','<div class="quote">
                                                            <blockquote>
                                                                <div class="quote-inner">
                                                                    <div class="post-inner-content">
                                                                        <strong>Təəsüf ki,</strong>
                                                                        <p>Rəy bildirmək mümkün olmadı.Daha sonra təkrar cəhd edin..</p>
                                                                    </div>
                                                                </div>
                                                            </blockquote>
                                                        </div>');
                    redirect($_SERVER['HTTP_REFERER']);
                }
            }
        }

        public function haqqimizda()
        {
            $this->load->view('front/haqqimizda/anasehife');
        }

        public function kunye()
        {
            $this->load->view('front/kunye/anasehife');
        }

        public function contact()
        {
            $this->load->view('front/contact/anasehife');
        }
        
        public function send_message()
        {
            $this->load->library('form_validation');
            $this->load->helper('security');
            $this->form_validation->set_rules('fullname','Ad Soyad','trim|required|min_length[5]|xss_clean');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|xss_clean');
            $this->form_validation->set_rules('subject','Mövzu','trim|required|xss_clean');
            $this->form_validation->set_rules('message', 'Mesaj','trim|required|xss_clean');
            $xetalar = array(
                             'required'    => "{field} xanasını doldurmaq məcburidir",
                             'min_length'  => "ad soyad ən az 5 hərf olmalıdır",
                             'valid_email' => "{field} - email adresini yoxlayın..!"
                            );
            $this->form_validation->set_message($xetalar);
            if ($this->form_validation->run() == FALSE) 
            {
                $this->session->set_flashdata('info','<div class="quote">
                                                            <blockquote>
                                                                <div class="quote-inner">
                                                                    <div class="post-inner-content">
                                                                        <p>'.$xetalar['info']=validation_errors().'</p>
                                                                    </div>
                                                                </div>
                                                            </blockquote>
                                                        </div>');
                redirect($_SERVER['HTTP_REFERER']);
            } 
            else 
            {
            
                $fullname    = $this->input->post('fullname',true);
                $email       = $this->input->post('email',true);
                $message     = $this->input->post('message',true);
                $subject     = $this->input->post('subject');
                $ip          = $this->input->post('ip');
                $status      = 0;
                $m_date      = date('d-m-Y');
                $data = [
                          'fullname'    => $fullname,
                          'email'       => $email,
                          'message'     => $message,
                          'subject'     => $subject,
                          'ip'          => $ip,
                          'status'      => $status,
                          'm_date'      => $m_date
                        ];

                $result = $this->dtbs->insert('message',$data);
                if($result)
                {
                    $this->session->set_flashdata('info', '<div class="quote">
                                                            <blockquote>
                                                                <div class="quote-inner">
                                                                    <div class="post-inner-content">
                                                                        <strong>Təşəkkürlər</strong>
                                                                        <p>Qısa bir zamanda mesajınıza cavab göndəriləcəkdir</p>
                                                                    </div>
                                                                </div>
                                                            </blockquote>
                                                        </div>');
                    redirect($_SERVER['HTTP_REFERER']);
                }
                else
                {
                    $this->session->set_flashdata('info','<div class="quote">
                                                            <blockquote>
                                                                <div class="quote-inner">
                                                                    <div class="post-inner-content">
                                                                        <strong>Təəsüf ki,</strong>
                                                                        <p>Mesaj göndərmək mümkün olmadı.Daha sonra təkrar cəhd edin..</p>
                                                                    </div>
                                                                </div>
                                                            </blockquote>
                                                        </div>');
                    redirect($_SERVER['HTTP_REFERER']);
                }
            }
        }

        public function axtar()
        {
           $this->load->view('anasehife');
        }


    }
 ?>