<?php 
     class Dtbs extends CI_Model
     {
      function __construct()
      {
         parent::__construct();
      }
      
     	function control($email,$password)
     	{
     		$result = $this
     		               ->db
     		               ->select('*')
     		               ->from('admin')
     		               ->where('email',$email)
     		               ->where('password',sha1(md5($password)))
     		               ->get()
     		               ->row();
     		return $result;
     	}

      function list($from)
      {
          $result = $this
                         ->db
                         ->select('*')
                         ->from($from)
                         ->order_by('id','desc')
                         ->get()
                         ->result_array();
           return $result;
      }

        function show($id,$from)
        {
            $result = $this
                         ->db
                         ->select('*')
                         ->from($from)
                         ->where('id',$id)
                         ->get()
                         ->row_array();
            return $result;
        }

        function update($data = array(),$id,$where,$from)
        {
            $result = $this->db->where($where,$id)->update($from,$data);
            return $result;
        }

        function insert($from,$data = array())
        {
            $result = $this->db->insert($from,$data);
            return $result;
        }

        function delete($id,$where,$from)
        {
            $result = $this->db->delete($from,array($where=>$id));
            return $result;
        }
        
        function xebersayi()
        {
            $result = $this
                           ->db
                           ->select('*')
                           ->from('news')
                           ->where('status',1)
                           ->count_all_results();
            return $result;
        }

        function xebergetir($per,$set)
        {
            $result = $this
                           ->db
                           ->select('*')
                           ->from('news')
                           ->where('status',1)
                           ->order_by('id','desc')
                           ->limit($per,$set)
                           ->get()
                           ->result_array();
            return $result;
        }

        function siyasetsayi()
        {
            $result = $this
                           ->db
                           ->select('*')
                           ->from('news')
                           ->where('cat_id','3')
                           ->where('status',1)
                           ->count_all_results();
            return $result;
        }

        function siyasetgetir($per,$set)
        {
            $result = $this
                           ->db
                           ->select('*')
                           ->from('news')
                           ->where('cat_id','3')
                           ->where('status',1)
                           ->order_by('id','desc')
                           ->limit($per,$set)
                           ->get()
                           ->result_array();
            return $result;
        }

        function sosialsayi()
        {
            $result = $this
                           ->db
                           ->select('*')
                           ->from('news')
                           ->where('cat_id','2')
                           ->where('status',1)
                           ->count_all_results();
            return $result;
        }

        function sosialgetir($per,$set)
        {
            $result = $this
                           ->db
                           ->select('*')
                           ->from('news')
                           ->where('cat_id','2')
                           ->where('status',1)
                           ->order_by('id','desc')
                           ->limit($per,$set)
                           ->get()
                           ->result_array();
            return $result;
        }

        function iqtisadiyyatsayi()
        {
            $result = $this
                           ->db
                           ->select('*')
                           ->from('news')
                           ->where('cat_id','4')
                           ->where('status',1)
                           ->count_all_results();
            return $result;
        }

        function iqtisadiyyatgetir($per,$set)
        {
            $result = $this
                           ->db
                           ->select('*')
                           ->from('news')
                           ->where('cat_id','4')
                           ->where('status',1)
                           ->order_by('id','desc')
                           ->limit($per,$set)
                           ->get()
                           ->result_array();
            return $result;
        }

        function cemiyyetsayi()
        {
            $result = $this
                           ->db
                           ->select('*')
                           ->from('news')
                           ->where('cat_id','5')
                           ->where('status',1)
                           ->count_all_results();
            return $result;
        }

        function cemiyyetgetir($per,$set)
        {
            $result = $this
                           ->db
                           ->select('*')
                           ->from('news')
                           ->where('cat_id','5')
                           ->where('status',1)
                           ->order_by('id','desc')
                           ->limit($per,$set)
                           ->get()
                           ->result_array();
            return $result;
        }



        function idmansayi()
        {
            $result = $this
                           ->db
                           ->select('*')
                           ->from('news')
                           ->where('cat_id','6')
                           ->where('status',1)
                           ->count_all_results();
            return $result;
        }

        function idmangetir($per,$set)
        {
            $result = $this
                           ->db
                           ->select('*')
                           ->from('news')
                           ->where('cat_id','6')
                           ->where('status',1)
                           ->order_by('id','desc')
                           ->limit($per,$set)
                           ->get()
                           ->result_array();
            return $result;
        }

        function dunyasayi()
        {
            $result = $this
                           ->db
                           ->select('*')
                           ->from('news')
                           ->where('cat_id','7')
                           ->where('status',1)
                           ->count_all_results();
            return $result;
        }

        function dunyagetir($per,$set)
        {
            $result = $this
                           ->db
                           ->select('*')
                           ->from('news')
                           ->where('cat_id','7')
                           ->where('status',1)
                           ->order_by('id','desc')
                           ->limit($per,$set)
                           ->get()
                           ->result_array();
            return $result;
        }

        function news_details($sef)
        {
            $result = $this
                          ->db
                          ->select('*')
                          ->from('news')
                          ->where('status','1')
                          ->where('sef',$sef)
                          ->get()
                          ->row_array();
            return $result;
        }


        function hit($sef)
        {
           $result = $this
                          ->db
                          ->select('*')
                          ->from('news')
                          ->where('status','1')
                          ->where('sef',$sef)
                          ->get()
                          ->row_array();
            return $result;
        }

        function message_update($id,$data=array())
        {
            $result = $this
                          ->db
                          ->where('id',$id)
                          ->update('message',$data);
            return $result;
        }
        
        function xeber_axtar($key)
        {
           $result = $this
                          ->db
                          ->select('*')
                          ->from('news')
                          ->where('status', '1')
                          ->where("title like '%{$key}%'")
                          ->get()
                          ->result_array();
            return $result;
        }
    

     }
 ?>