<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $info['title'];?></title>
<link rel="shortcut icon" href="<?=base_url('assets/front/');?>images/favicon.png" type="image/x-icon">
<link rel='stylesheet' href='<?=base_url('assets/front/');?>css/styles33a6.css?ver=4.9' type='text/css' media='all' />
<link rel='stylesheet' href='<?=base_url('assets/front/');?>css/base4a41.css?ver=4.8.2' type='text/css' media='all' />
<link rel='stylesheet' href='<?=base_url('assets/front/');?>css/bootstrap.min4a41.css?ver=4.8.2' type='text/css' media='all' />
<link rel='stylesheet' href='<?=base_url('assets/front/');?>css/prettyPhoto4a41.css?ver=4.8.2' type='text/css' media='all' />
<link rel='stylesheet' href='<?=base_url('assets/front/');?>css/font-awesome/css/font-awesome.min4a41.css?ver=4.8.2' type='text/css' media='all' />
<link rel='stylesheet' href='<?=base_url('assets/front/');?>css/EnFonto/style4a41.css?ver=4.8.2' type='text/css' media='all' />
<link rel='stylesheet' href='<?=base_url('assets/front/');?>css/animate-custom4a41.css?ver=4.8.2' type='text/css' media='all' />
<link rel='stylesheet' href='<?=base_url('assets/front/');?>css/style.css' type='text/css' media='all' />
<link rel='stylesheet' href='<?=base_url('assets/front/');?>css/main4a41.css?ver=4.8.2' type='text/css' media='all' />
<link rel='stylesheet' href='<?=base_url('assets/front/');?>css/responsive4a41.css?ver=4.8.2' type='text/css' media='all' />
<link rel='stylesheet' href='<?=base_url('assets/front/');?>css/dark4a41.css?ver=4.8.2' type='text/css' media='all' />
<link rel='stylesheet' href='<?=base_url('assets/front/');?>css/skins/skins4a41.css?ver=4.8.2' type='text/css' media='all' />
<link rel='stylesheet' href='<?=base_url('assets/front/');?>css/custom4a41.css?ver=4.8.2' type='text/css' media='all' />
<style type='text/css'>
@media only screen and (max-width: 479px) {
.bottom-header.fixed-nav {
position: static !important;
}
}

#sections-id-3 .box-slideshow {
margin-bottom: 30px
}
</style>
</head>

<body class="home page-template-default page page-id-1129">
<div class="background-cover"></div>

<div id="wrap" class="grid_1200 fixed-enabled ">
<div class="wrap-content">
<div class="clearfix"></div>
<div class="clearfix"></div>
<header id="header" class="header-1">
<div class="top-header main-block">
<div class="container">
<div class="header-follow header-follow-right">
<ul>
<?php $social = social_media(); foreach ($social as $social): ?>
<li class="social-<?=$social['sef'];?>">
	<a class="tooltip-n" href="<?=$social['url'];?>" target='_blank'>
	   <i class="fa fa-<?=$social['sef'];?>"></i>
    </a>
</li>
<?php endforeach ?>
</ul>
</div>
<nav class="navigation navigation-left" rel="navigation_left">
<div class="header-menu">
<ul id="menu-top-header-main" class="">
<li class="menu-item menu-item-type-post_type"><a href="<?=base_url();?>" class="">ANA SƏHİFƏ</a></li>
<li class="menu-item menu-item-type-post_type"><a href="<?=base_url('anasehife/haqqimizda');?>" class="">HAQQIMIZDA</a></li>
<li class="menu-item menu-item-type-post_type"><a href="<?=base_url('anasehife/contact');?>" class="">ƏLAQƏ</a></li>
</ul>
</div>
</nav>
<nav class="navigation_left navigation_mobile navigation_mobile_main">
<div class="navigation_mobile_click">Bakın...</div>
<ul></ul>
</nav>
</div>
</div>
<div class="main-header">
<div class="container">
<div class="logo">
<a class="logo-img" href="<?=base_url();?>" title="WorldPlus">
<img class="default_logo" alt="WorldPlus" src="<?=base_url('assets/front/');?>images/xeberlogo.png">
<img class="retina_logo" alt="WorldPlus" src="<?=base_url('assets/front/');?>images/xeberlogo.png">
</a>
</div>
<div class="worldplus-ad worldplus-ad-header-1">
<?php $reklam = reklam(); $tarix = date('Y-m-d');
	if(is_array($reklam)) { ?>
		<a href="<?=$reklam['link'];?>">
		   <img alt="<?=$reklam['firma'];?>" title="<?=$reklam['firma'];?>" src="<?php echo base_url(); echo $reklam['tmb'];?>">
		</a>
	<?php } else { ?>
		<a>
		   <img alt="boş reklam" style="object-fit:contain;" title='boş reklam' src="<?=base_url();?>/assets/front/images/reklam/banner/bosbanner.png">
		</a>
	<?php }	?>
</div>
<div class="worldplus-ad-clearfix clearfix"></div>
</div>
</div>
<div class="hidden-header">
<div class="bottom-header main-block bottom-header-2">
<div class="container">
<nav class="navigation" rel="navigation_main">
<div class="header-menu">
<ul id="menu-header" class="">
<li class="menu-item menu-item-type-custom"><a href="<?=base_url();?>">ANA SƏHİFƏ</a></li>
</li>
<li class="menu-item menu-item-type-custom"><a href="<?=base_url('anasehife/sosial');?>">SOSİAL XƏBƏRLƏR</a></li>
<li class="menu-item menu-item-type-custom"><a href="<?=base_url('anasehife/siyaset');?>">SİYASƏT XƏBƏRLƏRİ</a></li>
<li class="menu-item menu-item-type-custom"><a href="<?=base_url('anasehife/iqtisadiyyat');?>">İQTİSADİYYAT XƏBƏRLƏRİ</a></li>
<li class="menu-item menu-item-type-custom"><a href="<?=base_url('anasehife/cemiyyet');?>">CƏMİYYƏT XƏBƏRLƏRİ</a></li>
<li class="menu-item menu-item-type-custom"><a href="<?=base_url('anasehife/idman');?>">İDMAN XƏBƏRLƏRİ</a></li>
<li class="menu-item menu-item-type-custom"><a href="<?=base_url('anasehife/dunya');?>">DÜNYA XƏBƏRLƏRİ</a></li>
</div>
</nav>
<nav class="navigation_main navigation_mobile navigation_mobile_main">
<div class="navigation_mobile_click">Baxın..</div>
<ul></ul>
</nav>
</div>
</div>
<div class="clearfix"></div>
</div>
</header>

<div class="main-header-footer">
<?php $this->load->view('front/dunya/details/bredcrumb');?>
<div class="clearfix"></div>
<div class="main-sections">
	<div class="sections sections-content sections-right-sidebar sections-sidebars">
		<div class="container">
<div class="row">
<div class="with-sidebar-container">
<div class="main-container col-md-8">
<div class="clearfix"></div>
<div class='all-blogs'>
	<?php $this->load->view('front/dunya/details/main_content');?>
</div>
</div>
<div class="first-sidebar sidebar-col col-md-4 sticky-sidebar">
<aside class="sidebar">
<?php $this->load->view('front/include/social_media');?>
<?php $this->load->view('front/include/tag');?>
<?php $this->load->view('front/include/sonxeberler');?>
<?php $this->load->view('front/include/kose_yazar');?>
</aside>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>

</div>

<?php $this->load->view('front/include/footer');?>
