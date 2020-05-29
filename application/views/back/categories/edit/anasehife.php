<!DOCTYPE html>
<html>
<head>
  <!-- head section -->
  <?php $this->load->view('back/include/head');?>
  <!-- style section -->
  <?php $this->load->view('back/include/style');?>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  
 <!-- header section start -->
   <?php $this->load->view('back/include/header');?>
 <!-- header section end -->

 <!-- sidebar section start -->
   <?php $this->load->view('back/include/sidebar');?>
 <!-- sidebar section end -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
   <?php $this->load->view('back/categories/edit/bredcrumb');?>

    <!-- Main content section start -->
      <?php $this->load->view('back/categories/edit/main_content');?>
    <!-- Main content section end -->
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <!-- footer section start -->
  <?php $this->load->view('back/include/footer');?>
 <!-- footer section end -->
