<div class="main-header-footer">
<div class="clearfix"></div>
<div class="main-sections">
<div id="sections-id-1" style='' class="sections-content sections-builder sections sections-full-width">
<div class="container">
<div class="row">
<div class="with-sidebar-container sidebar-container-builder">
<div class="main-container col-md-12">
<div class="row">
<div class="col-md-12">	
<div class="box-border">
<div class="box-slideshow box-slideshow-full slide-show-full slideshow-style-10">
<ul>
<?php $gallery = gallery(); foreach ($gallery as $info){ ?>
<li class="slider-item">
<div class="box-slideshow-main box-slideshow-bigger">
<div class="box-slideshow-img">
<img alt='<?=$info['title'];?>' style="width:1140px;height:500px;" src='<?php echo base_url(); echo $info['image'];?>'>
</div>
<div class="slideshow-overlay"></div>
<div class="box-slideshow-content">
<div class="box-slideshow-outer">
<div class="box-slideshow-inner">
<?php if($info['category']=='Siyasət') { ?>
<a class="box-news-overlay-3" href="<?php echo base_url('anasehife/siyaset_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"></a>
<?php } elseif($info['category']=='Sosial'){ ?>
<a class="box-news-overlay-3" href="<?php echo base_url('anasehife/sosial_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"></a>
<?php } elseif($info['category']=='İqtisadiyyat'){ ?>
<a class="box-news-overlay-3" href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"></a>
<?php } elseif($info['category']=='İdman'){ ?>
<a class="box-news-overlay-3" href="<?php echo base_url('anasehife/idman_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"></a>
<?php } elseif($info['category']=='Dünya'){ ?>
<a class="box-news-overlay-3" href="<?php echo base_url('anasehife/dunya_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"></a>
<?php } elseif($info['category']=='Cəmiyyət'){ ?>
<a class="box-news-overlay-3" href="<?php echo base_url('anasehife/cemiyyet_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"></a>
<?php } ?>

<?php if($info['category']=='Siyasət') { ?>
<a href="<?php echo base_url('anasehife/siyaset_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"><?php echo $info['title'];?></a>
<?php } elseif($info['category']=='Sosial'){ ?>
<a href="<?php echo base_url('anasehife/sosial_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"><?php echo $info['title'];?></a>
<?php } elseif($info['category']=='İqtisadiyyat'){ ?>
<a href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"><?php echo $info['title'];?></a>
<?php } elseif($info['category']=='İdman'){ ?>
<a href="<?php echo base_url('anasehife/idman_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"><?php echo $info['title'];?></a>
<?php } elseif($info['category']=='Dünya'){ ?>
<a href="<?php echo base_url('anasehife/dunya_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"><?php echo $info['title'];?></a>
<?php } elseif($info['category']=='Cəmiyyət'){ ?>
<a href="<?php echo base_url('anasehife/cemiyyet_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"><?php echo $info['title'];?></a>
<?php } ?>
<div class="clearfix"></div>
<span class="slide-category">
<?php if($info['category']=='Siyasət') { ?>
<a href="<?php echo base_url('anasehife/siyaset_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>"><?php echo $info['category'];?></a>
<?php } elseif($info['category']=='Sosial'){ ?>
<a href="<?php echo base_url('anasehife/sosial_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>"><?php echo $info['category'];?></a>
<?php } elseif($info['category']=='İqtisadiyyat'){ ?>
<a href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>"><?php echo $info['category'];?></a>
<?php } elseif($info['category']=='İdman'){ ?>
<a href="<?php echo base_url('anasehife/idman_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>"><?php echo $info['category'];?></a>
<?php } elseif($info['category']=='Dünya'){ ?>
<a href="<?php echo base_url('anasehife/dunya_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>"><?php echo $info['category'];?></a>
<?php } elseif($info['category']=='Cəmiyyət'){ ?>
<a href="<?php echo base_url('anasehife/cemiyyet_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>"><?php echo $info['category'];?></a>
<?php } ?>

</span>
<span class="slide-date"><i class="fa fa-calendar"></i><?php echo $info['news_date'];?></span>
</div>
</div>
</div>
</div>
</li>	
<?php } ?>

</ul>
</div>
<div class="clearfix"></div>
</div>
</div>


</div>
</div>
<!-- End main-container -->
</div>
<!-- End with-sidebar-container -->
</div>
<!-- End row -->
</div>
<!-- End container -->
</div>
<!-- End sections -->


<div id="sections-id-3" style='' class="sections-content sections-builder sections sections-right-sidebar">
<div class="container">
<div class="row">
<div class="with-sidebar-container sidebar-container-builder">
<div class="main-container col-md-8">
<div class="row">
<!-- Siyaset 5 Haber -->
<div class="col-md-12">

<div class="box-border">
<div class="post-title post-title-news">
<h3><a href="<?=base_url('anasehife/siyaset');?>">SİYASƏT XƏBƏRLƏRİ</a></h3>
</div>
<div class="clearfix"></div>

<div class="box-news box-news-1 box-news-sidebar">
<div class="row">
<ul>

<?php $s_cat = 3; $s_info = son_siyaset($s_cat); foreach ($s_info as $sinfo){ $s_id = $sinfo['id'];?>
<li class="col-md-6 col-sm-6 col-xs-6 col-mo-100">
<div class="box-news-big">
<div class="box-news-img">
<img alt='<?=$sinfo['title'];?>' width='409' height='260' src='<?php echo base_url(); echo $sinfo['tmb'];?>'>
<div class="box-news-overlay"><a href="<?php echo base_url('anasehife/siyaset_details/'); echo $sinfo['sef'];?>" title="<?=$sinfo['title'];?>" rel="bookmark"></a></div>
</div>

<div class="box-news-content">
<div class="box-news-title">
	<a href="<?php echo base_url('anasehife/siyaset_details/'); echo $sinfo['sef'];?>" title="<?=$sinfo['title'];?>" rel="bookmark"><?=$sinfo['title'];?></a>
</div>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?=$sinfo['news_date'];?></time>
<a class="box-news-meta-comment" href="#"><i class="fa fa-comments-o"></i>
	<?php echo comment_getir($s_id); ?> rəy</a>
<div class="box-news-meta-view"><i class="fa fa-eye"></i> oxunma sayı : <?php echo $sinfo['hit'];?></div>
</div>
<!-- End box-news-meta -->
<div class="box-news-desc">
<p><?=word_limiter($sinfo['news_text'],25);?></p>
</div>
<div class="post-more"><a class="button-default medium" href="<?php echo base_url('anasehife/siyaset_details/'); echo $sinfo['sef'];?>" title="<?=$sinfo['title'];?>" rel="bookmark"><i class="fa fa-long-arrow-right"></i>Davamını oxu</a></div>
</div>
<!-- End box-news-content -->
<div class="clearfix"></div>
</div>
<!-- End box-news-big -->
</li>
<?php } ?>

<?php $s_cat = 3; $mini_siyaset = mini_siyaset($s_cat); foreach ($mini_siyaset as $mini_info){ $s_id = $mini_info['id'];?>
<li class="col-md-6 col-sm-6 col-xs-6 col-mo-100">
<div class="box-news-small">
<div class="box-news-img">
<img alt='<?=$mini_info['title'];?>' width='94' height='73' src='<?php echo base_url(); echo $mini_info['mini'];?>'>
<div class="box-news-overlay"><a href="<?php echo base_url('anasehife/siyaset_details/'); echo $mini_info['sef'];?>" title="<?=$mini_info['title'];?>" rel="bookmark"></a></div>
</div>
<!-- End box-news-img -->
<div class="box-news-content">
<div class="box-news-title"><a href="<?php echo base_url('anasehife/siyaset_details/'); echo $mini_info['sef'];?>" title="<?=$mini_info['title'];?>" rel="bookmark"><?php echo word_limiter($mini_info['title'],3);?></a></div>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo $mini_info['news_date'];?></time>
<a class="box-news-meta-comment" href="#"><i class="fa fa-comments-o"></i><?php echo comment_getir($s_id); ?> rəy</a>
<div class="box-news-meta-view"><i class="fa fa-eye"></i>oxunma sayı : <?php echo $mini_info['hit'];?></div>
</div>
<!-- End box-news-meta -->
</div>
<!-- End box-news-content -->
<div class="clearfix"></div>
</div>
<!-- End box-news-small -->
</li>
<?php } ?>

<!-- End col-* -->
</ul>
<!-- End ul -->
</div>
<!-- End row -->
</div>
<!-- End box-news -->
<div class="clearfix"></div>
</div>
<!-- End box-border -->
</div>
<!-- #Siyaset 5 Haber  -->
<!-- End col-* -->

<div class="col-md-12">

<div class="box-border">
<div class="post-title post-title-news">
<h3><a href="<?=base_url('anasehife/sosial');?>">SOSİAL XƏBƏRLƏR</a></h3></div>
<div class="clearfix"></div>

<div class="box-news box-news-1 box-news-sidebar">
<div class="row">
<ul>
<?php $s_cat = 2; $sosial = son_sosial($s_cat); foreach ($sosial as $sos_info){ $s_id = $sos_info['id']; ?>
<li class="col-md-6 col-sm-6 col-xs-6 col-mo-100">
<div class="box-news-big">
<div class="box-news-img">
<img alt='<?=$sos_info['title'];?>' width='409' height='260' src='<?php echo base_url(); echo $sos_info['tmb'];?>'>
<div class="box-news-overlay"><a href="<?php echo base_url('anasehife/sosial_details/'); echo $sos_info['sef'];?>" title="<?=$sos_info['title'];?>" rel="bookmark"></a></div>
</div>

<div class="box-news-content">
<div class="box-news-title">
	<a href="<?php echo base_url('anasehife/sosial_details/'); echo $sos_info['sef'];?>" title="<?=$sos_info['title'];?>" rel="bookmark"><?php echo $sos_info['title'];?></a>
</div>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo $sos_info['news_date'];?></time>
<a class="box-news-meta-comment" href="#"><i class="fa fa-comments-o"></i><?php echo comment_getir($s_id); ?> rəy</a>
<div class="box-news-meta-view"><i class="fa fa-eye"></i>oxunma sayı : <?php echo $sos_info['hit'];?></div>
</div>
<!-- End box-news-meta -->
<div class="box-news-desc">
<p><?php echo word_limiter($sos_info['news_text'],25);?></p>
</div>
<div class="post-more"><a class="button-default medium" href="<?php echo base_url('anasehife/sosial_details/'); echo $sos_info['sef'];?>" title="<?=$sos_info['title'];?>" rel="bookmark"><i class="fa fa-long-arrow-right"></i>Davamını oxu</a></div>
</div>
<!-- End box-news-content -->
<div class="clearfix"></div>
</div>
<!-- End box-news-big -->
</li>
<?php } ?>

<?php $s_cat = 2; $sosial = mini_sosial($s_cat); foreach ($sosial as $sos_info){ $s_id = $sos_info['id']; ?>
<li class="col-md-6 col-sm-6 col-xs-6 col-mo-100">
<div class="box-news-small">
<div class="box-news-img">
<img alt='' width='94' height='73' src='<?php echo base_url(); echo $sos_info['mini'];?>'>
<div class="box-news-overlay"><a href="<?php echo base_url('anasehife/sosial_details/'); echo $sos_info['sef'];?>" title="<?=$sos_info['title'];?>" rel="bookmark"></a></div>
</div>
<!-- End box-news-img -->
<div class="box-news-content">
<div class="box-news-title"><a href="<?php echo base_url('anasehife/sosial_details/'); echo $sos_info['sef'];?>" title="<?=$sos_info['title'];?>" rel="bookmark"><?php echo word_limiter($sos_info['title'],3);?></a></div>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo $sos_info['news_date'];?></time>
<a class="box-news-meta-comment" href="#"><i class="fa fa-comments-o"></i><?php echo comment_getir($s_id); ?> rəy</a>
<div class="box-news-meta-view"><i class="fa fa-eye"></i>oxunma sayı : <?php echo $sos_info['hit'];?></div>
</div>
<!-- End box-news-meta -->
</div>
<!-- End box-news-content -->
<div class="clearfix"></div>
</div>
<!-- End box-news-small -->
</li>
<?php } ?>

</ul>
<!-- End ul -->
</div>
<!-- End row -->
</div>
<!-- End box-news -->
<div class="clearfix"></div>
</div>
<!-- End box-border -->
</div>


<div class="col-md-12">

<div class="box-border">
<div class="post-title post-title-news">
<h3><a href="<?=base_url('anasehife/iqtisadiyyat');?>">İQTİSADİYYAT XƏBƏRLƏRİ</a></h3></div>
<div class="clearfix"></div>

<div class="box-news box-news-1 box-news-sidebar">
<div class="row">
<ul>
<?php $s_cat = 4; $iqtisad = son_iqtisad($s_cat); foreach ($iqtisad as $s_iqtisad){ $s_id = $s_iqtisad['id']; ?>
<li class="col-md-6 col-sm-6 col-xs-6 col-mo-100">
<div class="box-news-big">
<div class="box-news-img">
<img alt='<?=$s_iqtisad['title'];?>' width='409' height='260' src='<?php echo base_url(); echo $s_iqtisad['tmb'];?>'>
<div class="box-news-overlay"><a href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $s_iqtisad['sef'];?>" title="<?=$s_iqtisad['title'];?>" rel="bookmark"></a></div>
</div>

<div class="box-news-content">
<div class="box-news-title">
	<a  href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $s_iqtisad['sef'];?>" title="<?=$s_iqtisad['title'];?>" rel="bookmark"><?php echo $s_iqtisad['title'];?></a>
</div>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo $s_iqtisad['news_date'];?></time>
<a class="box-news-meta-comment" href="#"><i class="fa fa-comments-o"></i><?php echo comment_getir($s_id); ?> rəy</a>
<div class="box-news-meta-view"><i class="fa fa-eye"></i>oxunma sayı : <?=$s_iqtisad['hit'];?></div>
</div>
<!-- End box-news-meta -->
<div class="box-news-desc">
<p><?php echo word_limiter($s_iqtisad['news_text'],25);?></p>
</div>
<div class="post-more"><a class="button-default medium"  href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $s_iqtisad['sef'];?>" title="<?=$s_iqtisad['title'];?>" rel="bookmark"><i class="fa fa-long-arrow-right"></i>Davamını oxu</a></div></div>
<!-- End box-news-content -->
<div class="clearfix"></div>
</div>
<!-- End box-news-big -->
</li>
<?php } ?>

<?php $s_cat = 4; $mini = mini_iqtisad($s_cat); foreach ($mini as $iqtisad){ $s_id =$iqtisad['id']; ?>
<li class="col-md-6 col-sm-6 col-xs-6 col-mo-100">
<div class="box-news-small">
<div class="box-news-img">
<img alt='<?=$iqtisad['title'];?>' width='94' height='73' src='<?php echo base_url(); echo $iqtisad['mini'];?>'>
<div class="box-news-overlay"><a  href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $iqtisad['sef'];?>" title="<?=$iqtisad['title'];?>" rel="bookmark"></a></div>
</div>
<!-- End box-news-img -->
<div class="box-news-content">
<div class="box-news-title"><a href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $iqtisad['sef'];?>" title="<?=$iqtisad['title'];?>" rel="bookmark"><?php echo word_limiter($iqtisad['title'],3);?></a></div>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo $iqtisad['news_date'];?></time>
<a class="box-news-meta-comment" href="#"><i class="fa fa-comments-o"></i><?php echo comment_getir($s_id); ?> rəy</a>
<div class="box-news-meta-view"><i class="fa fa-eye"></i>oxunma sayı : <?php echo $iqtisad['hit'];?></div>
</div>
<!-- End box-news-meta -->
</div>
<!-- End box-news-content -->
<div class="clearfix"></div>
</div>
<!-- End box-news-small -->
</li>

<?php } ?>

</ul>
<!-- End ul -->
</div>
<!-- End row -->
</div>
<!-- End box-news -->
<div class="clearfix"></div>
</div>
<!-- End box-border -->
</div>

<!-- End col-* -->



<div class="col-md-12">

<div class="box-border">
<div class="post-title post-title-news">
<h3><a href="<?=base_url('anasehife/cemiyyet');?>">CƏMİYYƏT XƏBƏRLƏRİ</a></h3></div>
<div class="clearfix"></div>

<div class="box-news box-news-1 box-news-sidebar">
<div class="row">
<ul>
<?php $s_cat = 5; $cemiyyet = son_cemiyyet($s_cat); foreach ($cemiyyet as $c_info){ $s_id = $c_info['id']; ?>
<li class="col-md-6 col-sm-6 col-xs-6 col-mo-100">
<div class="box-news-big">
<div class="box-news-img">
<img alt='<?=$c_info['title'];?>' width='409' height='260' src='<?php echo base_url(); echo  $c_info['tmb'];?>'>
<div class="box-news-overlay"><a  href="<?php echo base_url('anasehife/cemiyyet_details/'); echo $c_info['sef'];?>" title="<?=$c_info['title'];?>" rel="bookmark"></a></div>
</div>

<div class="box-news-content">
<div class="box-news-title">
	<a href="<?php echo base_url('anasehife/cemiyyet_details/'); echo $c_info['sef'];?>" title="<?=$c_info['title'];?>" rel="bookmark"><?php echo $c_info['title'];?></a>
</div>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo $c_info['news_date'];?></time>
<a class="box-news-meta-comment" href="#"><i class="fa fa-comments-o"></i><?php echo comment_getir($s_id); ?> rəy</a>
<div class="box-news-meta-view"><i class="fa fa-eye"></i>oxunma sayı : <?php echo $c_info['hit'];?></div>
</div>
<!-- End box-news-meta -->
<div class="box-news-desc">
<p><?php echo word_limiter($c_info['news_text'],25);?></p>
</div>
<div class="post-more"><a class="button-default medium" href="<?php echo base_url('anasehife/cemiyyet_details/'); echo $c_info['sef'];?>" title="<?=$c_info['title'];?>" rel="bookmark"><i class="fa fa-long-arrow-right"></i>Davamını oxu</a></div>
</div>
<!-- End box-news-content -->
<div class="clearfix"></div>
</div>
<!-- End box-news-big -->
</li>	
<?php } ?>

<?php $s_cat = 5; $cemiyyet = mini_cemiyyet($s_cat); foreach ($cemiyyet as $c_info){ $s_id = $c_info['id']; ?>
<li class="col-md-6 col-sm-6 col-xs-6 col-mo-100">
<div class="box-news-small">
<div class="box-news-img">
<img alt='<?=$c_info['title'];?>' width='94' height='73' src='<?php echo base_url(); echo $c_info['mini'];?>'>
<div class="box-news-overlay"><a href="<?php echo base_url('anasehife/cemiyyet_details/'); echo $c_info['sef'];?>" title="<?=$c_info['title'];?>" rel="bookmark"></a></div>
</div>
<!-- End box-news-img -->
<div class="box-news-content">
<div class="box-news-title"><a href="<?php echo base_url('anasehife/cemiyyet_details/'); echo $c_info['sef'];?>" title="<?=$c_info['title'];?>" rel="bookmark"><?php echo word_limiter($c_info['title'],3); ?></a></div>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo $c_info['news_date']; ?></time>
<a class="box-news-meta-comment" href="#"><i class="fa fa-comments-o"></i><?php echo comment_getir($s_id); ?> rəy</a>
<div class="box-news-meta-view"><i class="fa fa-eye"></i>oxunma sayı : <?php echo $c_info['hit'];?></div>
</div>
<!-- End box-news-meta -->
</div>
<!-- End box-news-content -->
<div class="clearfix"></div>
</div>
<!-- End box-news-small -->
</li>	
<?php } ?>

</ul>
<!-- End ul -->
</div>
<!-- End row -->
</div>
<!-- End box-news -->
<div class="clearfix"></div>
</div>
<!-- End box-border -->
</div>




<div class="col-md-12">

<div class="box-border">
<div class="post-title post-title-news">
<h3><a href="<?=base_url('anasehife/idman');?>">İDMAN XƏBƏRLƏRİ</a></h3></div>
<div class="clearfix"></div>

<div class="box-news box-news-1 box-news-sidebar">
<div class="row">
<ul>

<?php $s_cat = 6; $idman = son_idman($s_cat); foreach ($idman as $info){ $s_id = $info['id']; ?>
<li class="col-md-6 col-sm-6 col-xs-6 col-mo-100">
<div class="box-news-big">
<div class="box-news-img">
<img alt='<?=$info['title'];?>' width='409' height='260' src='<?php echo base_url(); echo $info['tmb'];?>'>
<div class="box-news-overlay"><a href="<?php echo base_url('anasehife/idman_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"></a></div>
</div>

<div class="box-news-content">
<div class="box-news-title">
	<a href="<?php echo base_url('anasehife/idman_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"><?php echo $info['title'];?></a>
</div>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo $info['news_date'];?></time>
<a class="box-news-meta-comment" href="#"><i class="fa fa-comments-o"></i><?php echo comment_getir($s_id); ?> rəy</a>
<div class="box-news-meta-view"><i class="fa fa-eye"></i> oxunma sayı : <?php echo $info['hit'];?></div>
</div>
<!-- End box-news-meta -->
<div class="box-news-desc">
<p><?php echo word_limiter($info['news_text'],25);?></p>
</div>
<div class="post-more"><a class="button-default medium" href="<?php echo base_url('anasehife/idman_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"><i class="fa fa-long-arrow-right"></i>Davamını oxu</a></div>
</div>
<!-- End box-news-content -->
<div class="clearfix"></div>
</div>
<!-- End box-news-big -->
</li>
<?php } ?>

<?php $s_cat = 6; $idman = mini_idman($s_cat); foreach ($idman as $info){ $s_id = $info['id']; ?>
<li class="col-md-6 col-sm-6 col-xs-6 col-mo-100">
<div class="box-news-small">
<div class="box-news-img">
<img alt='<?=$info['title'];?>' width='94' height='73' src='<?php echo base_url(); echo $info['mini'];?>'>
<div class="box-news-overlay"><a href="<?php echo base_url('anasehife/idman_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"></a></div>
</div>
<!-- End box-news-img -->
<div class="box-news-content">
<div class="box-news-title"><a href="<?php echo base_url('anasehife/idman_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"><?php echo word_limiter($info['title'],3);?></a></div>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo $info['news_date'];?></time>
<a class="box-news-meta-comment" href="#"><i class="fa fa-comments-o"></i><?php echo comment_getir($s_id); ?> rəy</a>
<div class="box-news-meta-view"><i class="fa fa-eye"></i> oxunma sayı : <?php echo $info['hit'];?></div>
</div>
<!-- End box-news-meta -->
</div>
<!-- End box-news-content -->
<div class="clearfix"></div>
</div>
<!-- End box-news-small -->
</li>	
<?php } ?>

</ul>
<!-- End ul -->
</div>
<!-- End row -->
</div>
<!-- End box-news -->
<div class="clearfix"></div>
</div>
<!-- End box-border -->
</div>



<div class="col-md-12">

<div class="box-border">
<div class="post-title post-title-news">
<h3><a href="<?=base_url('anasehife/dunya');?>">DÜNYA XƏBƏRLƏRİ</a></h3></div>
<div class="clearfix"></div>

<div class="box-news box-news-1 box-news-sidebar">
<div class="row">
<ul>
<?php $s_cat = 7; $dunya = son_dunya($s_cat); foreach ($dunya as $d_info){ $s_id = $info['id']; ?>
<li class="col-md-6 col-sm-6 col-xs-6 col-mo-100">
<div class="box-news-big">
<div class="box-news-img">
<img alt='<?=$d_info['title'];?>' width='409' height='260' src='<?php echo base_url(); echo $d_info['tmb'];?>'>
<div class="box-news-overlay"><a href="<?php echo base_url('anasehife/dunya_details/'); echo $d_info['sef'];?>" title="<?=$d_info['title'];?>" rel="bookmark"></a></div>
</div>

<div class="box-news-content">
<div class="box-news-title">
	<a href="<?php echo base_url('anasehife/dunya_details/'); echo $d_info['sef'];?>" title="<?=$d_info['title'];?>" rel="bookmark"><?php echo $d_info['title'];?></a>
</div>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo $d_info['news_date'];?></time>
<a class="box-news-meta-comment" href="#"><i class="fa fa-comments-o"></i><?php echo comment_getir($s_id);?> rəy</a>
<div class="box-news-meta-view"><i class="fa fa-eye"></i> oxunma sayı : <?php echo $d_info['hit'];?></div>
</div>
<!-- End box-news-meta -->
<div class="box-news-desc">
<p><?php echo word_limiter($d_info['news_text'],25);?></p>
</div>
<div class="post-more"><a class="button-default medium" href="<?php echo base_url('anasehife/dunya_details/'); echo $d_info['sef'];?>" title="<?=$d_info['title'];?>" rel="bookmark"><i class="fa fa-long-arrow-right"></i>Davamını oxu</a></div>
</div>
<!-- End box-news-content -->
<div class="clearfix"></div>
</div>
<!-- End box-news-big -->
</li>	
<?php } ?>

<?php $s_cat = 7; $dunya = mini_dunya($s_cat); foreach ($dunya as $d_info){ $s_id = $d_info['id']; ?>
<li class="col-md-6 col-sm-6 col-xs-6 col-mo-100">
<div class="box-news-small">
<div class="box-news-img">
<img alt='<?=$d_info['title'];?>' width='94' height='73' src='<?php echo base_url(); echo $d_info['mini'];?>'>
<div class="box-news-overlay"><a href="<?php echo base_url('anasehife/dunya_details/'); echo $d_info['sef'];?>" title="<?=$d_info['title'];?>" rel="bookmark"></a></div>
</div>
<!-- End box-news-img -->
<div class="box-news-content">
<div class="box-news-title"><a href="<?php echo base_url('anasehife/dunya_details/'); echo $d_info['sef'];?>" title="<?=$d_info['title'];?>" rel="bookmark"><?php echo word_limiter($d_info['title'],3);?></a></div>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo $d_info['news_date'];?></time>
<a class="box-news-meta-comment" href="#"><i class="fa fa-comments-o"></i><?php echo comment_getir($s_id); ?> rəy</a>
<div class="box-news-meta-view"><i class="fa fa-eye"></i> oxunma sayı : <?php echo $d_info['hit'];?></div>
</div>
<!-- End box-news-meta -->
</div>
<!-- End box-news-content -->
<div class="clearfix"></div>
</div>
<!-- End box-news-small -->
</li>	
<?php } ?>

</ul>
<!-- End ul -->
</div>
<!-- End row -->
</div>
<!-- End box-news -->
<div class="clearfix"></div>
</div>
<!-- End box-border -->
</div>


<div class="col-md-12">
<div class="scroll-news scroll-posts-half scroll-news-new scroll-arrow-top">
<div class="post-title post-title-news">
<h3>SON DƏQİQƏ XƏBƏRLƏRİ</h3></div>
<div class="clearfix"></div>
<div class="row">
<div class="head-slide scroll-posts head-slide-show">
<ul>
<li class='slider-item'>
<?php $sd = 0; $sondeqiqexeber = sondeqiqexeber($sd); foreach ($sondeqiqexeber as $son){ ?>
<article class="slide-item col-xs-4 col-md-4">
<div class="slide-content">
<div class="slide-data">
<div class="slide-data-outer">
<div class="slide-data-inner">
<?php if($son['category']=='Siyasət') { ?>
<a class="slide-link" href="<?php echo base_url('anasehife/siyaset_details/'); echo $son['sef'];?>" title="<?=$son['title'];?>" rel="bookmark"></a>
<?php } elseif($son['category']=='Sosial'){ ?>
<a class="slide-link" href="<?php echo base_url('anasehife/sosial_details/'); echo $son['sef'];?>" title="<?=$son['title'];?>" rel="bookmark"></a>
<?php } elseif($son['category']=='İqtisadiyyat'){ ?>
<a class="slide-link" href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $son['sef'];?>" title="<?=$son['title'];?>" rel="bookmark"></a>
<?php } elseif($son['category']=='İdman'){ ?>
<a class="slide-link" href="<?php echo base_url('anasehife/idman_details/'); echo $son['sef'];?>" title="<?=$son['title'];?>" rel="bookmark"></a>
<?php } elseif($son['category']=='Dünya'){ ?>
<a class="slide-link" href="<?php echo base_url('anasehife/dunya_details/'); echo $son['sef'];?>" title="<?=$son['title'];?>" rel="bookmark"></a>
<?php } elseif($son['category']=='Cəmiyyət'){ ?>
<a class="slide-link" href="<?php echo base_url('anasehife/cemiyyet_details/'); echo $son['sef'];?>" title="<?=$son['title'];?>" rel="bookmark"></a>
<?php } ?>
<span class="slide-category">
<?php if($son['category']=='Siyasət') { ?>
<a href="<?php echo base_url('anasehife/siyaset_details/'); echo $son['sef'];?>" title="<?=$son['title'];?>"><?php echo $son['category'];?></a>
<?php } elseif($son['category']=='Sosial'){ ?>
<a href="<?php echo base_url('anasehife/sosial_details/'); echo $son['sef'];?>" title="<?=$son['title'];?>"><?php echo $son['category'];?></a>
<?php } elseif($son['category']=='İqtisadiyyat'){ ?>
<a href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $son['sef'];?>" title="<?=$son['title'];?>"><?php echo $son['category'];?></a>
<?php } elseif($son['category']=='İdman'){ ?>
<a href="<?php echo base_url('anasehife/idman_details/'); echo $son['sef'];?>" title="<?=$son['title'];?>"><?php echo $son['category'];?></a>
<?php } elseif($son['category']=='Dünya'){ ?>
<a href="<?php echo base_url('anasehife/dunya_details/'); echo $son['sef'];?>" title="<?=$son['title'];?>"><?php echo $son['category'];?></a>
<?php } elseif($son['category']=='Cəmiyyət'){ ?>
<a href="<?php echo base_url('anasehife/cemiyyet_details/'); echo $son['sef'];?>" title="<?=$son['title'];?>"><?php echo $son['category'];?></a>
<?php } ?>
</span>
<span class="slide-date"><i class='fa fa-calendar'></i><?php echo $son['news_date'];?></span>
<span class="slide-review"></span>
</div>
</div>
</div>
<div class="slide-hover"></div>
<div class="slide-image"><span><img alt='<?=$son['title'];?>' width='263' height='187' src='<?php echo base_url(); echo $son['tmb'];?>'></span></div>
</div>
<?php if($son['category']=='Siyasət') { ?>
<h4 class="slide-title"><a href="<?php echo base_url('anasehife/siyaset_details/'); echo $son['sef'];?>" title="<?=$son['title'];?>" rel="bookmark"><?php echo $son['title'];?></a></h4>
<?php } elseif($son['category']=='Sosial'){ ?>
<h4 class="slide-title"><a href="<?php echo base_url('anasehife/sosial_details/'); echo $son['sef'];?>" title="<?=$son['title'];?>" rel="bookmark"><?php echo $son['title'];?></a></h4>
<?php } elseif($son['category']=='İqtisadiyyat'){ ?>
<h4 class="slide-title"><a href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $son['sef'];?>" title="<?=$son['title'];?>" rel="bookmark"><?php echo $son['title'];?></a></h4>
<?php } elseif($son['category']=='İdman'){ ?>
<h4 class="slide-title"><a href="<?php echo base_url('anasehife/idman_details/'); echo $son['sef'];?>" title="<?=$son['title'];?>" rel="bookmark"><?php echo $son['title'];?></a></h4>
<?php } elseif($son['category']=='Dünya'){ ?>
<h4 class="slide-title"><a href="<?php echo base_url('anasehife/dunya_details/'); echo $son['sef'];?>" title="<?=$son['title'];?>" rel="bookmark"><?php echo $son['title'];?></a></h4>
<?php } elseif($son['category']=='Cəmiyyət'){ ?>
<h4 class="slide-title"><a href="<?php echo base_url('anasehife/cemiyyet_details/'); echo $son['sef'];?>" title="<?=$son['title'];?>" rel="bookmark"><?php echo $son['title'];?></a></h4>
<?php } ?>
</article>	
<?php } ?>
</li>

<li class='slider-item'>
<?php $sd1 = 0; $sondeqiqexeber1 = sondeqiqexeber1($sd1); foreach ($sondeqiqexeber1 as $son1){ ?>
<article class="slide-item col-xs-4 col-md-4">
<div class="slide-content">
<div class="slide-data">
<div class="slide-data-outer">
<div class="slide-data-inner">
<a class="slide-link" href="#" title="" rel="bookmark"></a>
<span class="slide-category">
<?php if($son1['category']=='Siyasət') { ?>
<a href="<?php echo base_url('anasehife/siyaset_details/'); echo $son1['sef'];?>" title="<?=$son1['title'];?>"><?php echo $son1['category'];?></a>
<?php } elseif($son1['category']=='Sosial'){ ?>
<a href="<?php echo base_url('anasehife/sosial_details/'); echo $son1['sef'];?>" title="<?=$son1['title'];?>"><?php echo $son1['category'];?></a>
<?php } elseif($son1['category']=='İqtisadiyyat'){ ?>
<a href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $son1['sef'];?>" title="<?=$son1['title'];?>"><?php echo $son1['category'];?></a>
<?php } elseif($son1['category']=='İdman'){ ?>
<a href="<?php echo base_url('anasehife/idman_details/'); echo $son1['sef'];?>" title="<?=$son1['title'];?>"><?php echo $son['category'];?></a>
<?php } elseif($son1['category']=='Dünya'){ ?>
<a href="<?php echo base_url('anasehife/dunya_details/'); echo $son1['sef'];?>" title="<?=$son1['title'];?>"><?php echo $son1['category'];?></a>
<?php } elseif($son1['category']=='Cəmiyyət'){ ?>
<a href="<?php echo base_url('anasehife/cemiyyet_details/'); echo $son1['sef'];?>" title="<?=$son1['title'];?>"><?php echo $son1['category'];?></a>
<?php } ?>
</span>
<span class="slide-date"><i class='fa fa-calendar'></i><?php echo $son1['news_date'];?></span>
<span class="slide-review"></span>
</div>
</div>
</div>
<div class="slide-hover"></div>
<div class="slide-image"><span><img alt='<?=$son1['title'];?>' width='263' height='187' src='<?php echo base_url(); echo $son1['tmb'];?>'></span></div>
</div>
<?php if($son1['category']=='Siyasət') { ?>
<h4 class="slide-title"><a href="<?php echo base_url('anasehife/siyaset_details/'); echo $son1['sef'];?>" title="<?=$son1['title'];?>" rel="bookmark"><?php echo $son1['title'];?></a></h4>
<?php } elseif($son1['category']=='Sosial'){ ?>
<h4 class="slide-title"><a href="<?php echo base_url('anasehife/sosial_details/'); echo $son1['sef'];?>" title="<?=$son1['title'];?>" rel="bookmark"><?php echo $son1['title'];?></a></h4>
<?php } elseif($son1['category']=='İqtisadiyyat'){ ?>
<h4 class="slide-title"><a href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $son1['sef'];?>" title="<?=$son1['title'];?>" rel="bookmark"><?php echo $son1['title'];?></a></h4>
<?php } elseif($son['category']=='İdman'){ ?>
<h4 class="slide-title"><a href="<?php echo base_url('anasehife/idman_details/'); echo $son1['sef'];?>" title="<?=$son1['title'];?>" rel="bookmark"><?php echo $son1['title'];?></a></h4>
<?php } elseif($son['category']=='Dünya'){ ?>
<h4 class="slide-title"><a href="<?php echo base_url('anasehife/dunya_details/'); echo $son1['sef'];?>" title="<?=$son1['title'];?>" rel="bookmark"><?php echo $son1['title'];?></a></h4>
<?php } elseif($son1['category']=='Cəmiyyət'){ ?>
<h4 class="slide-title"><a href="<?php echo base_url('anasehife/cemiyyet_details/'); echo $son1['sef'];?>" title="<?=$son1['title'];?>" rel="bookmark"><?php echo $son1['title'];?></a></h4>
<?php } ?>
</article>	
<?php } ?>
</li>

</ul>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>

<!-- End col-* -->


<div class='clearfix'></div>
<div class="col-md-12">
<div class="box-border">
<div class='all-blogs'>
<?php foreach ($xeber as $xeberler) {$s_id = $xeberler['id']; ?>
<article class="v-post clearfix article-title-meta-image post-style-6 animation post--content image_post post-no-border post-1912 post type-post status-publish format-standard has-post-thumbnail hentry category-business" data-animate="fadeInUp" itemscope=""
itemtype="http://schema.org/Article">
<div class="post-img post-img-9">
<?php if($xeberler['category']=='Siyasət') { ?>
<a href="<?php echo base_url('anasehife/siyaset_details/'); echo $xeberler['sef'];?>" title="<?=$xeberler['title'];?>" rel="bookmark" class='post-img-link'>
<img alt='<?=$xeberler['title'];?>' width='280' height='230' src='<?php echo base_url(); echo $xeberler['tmb'];?>'>
</a>
<?php } elseif($xeberler['category']=='Sosial'){ ?>
<a href="<?php echo base_url('anasehife/sosial_details/'); echo $xeberler['sef'];?>" title="<?=$xeberler['title'];?>" rel="bookmark" class='post-img-link'>
<img alt='<?=$xeberler['title'];?>' width='280' height='230' src='<?php echo base_url(); echo $xeberler['tmb'];?>'>
</a>
<?php } elseif($xeberler['category']=='İqtisadiyyat'){ ?>
<a href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $xeberler['sef'];?>" title="<?=$xeberler['title'];?>" rel="bookmark" class='post-img-link'>
<img alt='<?=$xeberler['title'];?>' width='280' height='230' src='<?php echo base_url(); echo $xeberler['tmb'];?>'>
</a>
<?php } elseif($xeberler['category']=='İdman'){ ?>
<a href="<?php echo base_url('anasehife/idman_details/'); echo $xeberler['sef'];?>" title="<?=$xeberler['title'];?>" rel="bookmark" class='post-img-link'>
<img alt='<?=$xeberler['title'];?>' width='280' height='230' src='<?php echo base_url(); echo $xeberler['tmb'];?>'>
</a>
<?php } elseif($xeberler['category']=='Dünya'){ ?>
<a href="<?php echo base_url('anasehife/dunya_details/'); echo $xeberler['sef'];?>" title="<?=$xeberler['title'];?>" rel="bookmark" class='post-img-link'>
<img alt='<?=$xeberler['title'];?>' width='280' height='230' src='<?php echo base_url(); echo $xeberler['tmb'];?>'>
</a>
<?php } elseif($xeberler['category']=='Cəmiyyət'){ ?>
<a href="<?php echo base_url('anasehife/cemiyyet_details/'); echo $xeberler['sef'];?>" title="<?=$xeberler['title'];?>" rel="bookmark" class='post-img-link'>
<img alt='<?=$xeberler['title'];?>' width='280' height='230' src='<?php echo base_url(); echo $xeberler['tmb'];?>'>
</a>
<?php } ?>
</div>
<div class='post-inner-6'>
<h1 class="post-head-title">
<?php if($xeberler['category']=='Siyasət') { ?>
<a itemprop="url" href="<?php echo base_url('anasehife/siayset_details/'); echo $xeberler['sef'];?>" title="<?=$xeberler['title'];?>" rel="bookmark">
	<?php echo $xeberler['title'];?>
</a>
<?php } elseif($xeberler['category']=='Sosial'){ ?>
<a itemprop="url" href="<?php echo base_url('anasehife/sosial_details/'); echo $xeberler['sef'];?>" title="<?=$xeberler['title'];?>" rel="bookmark">
	<?php echo $xeberler['title'];?>
</a>
<?php } elseif($xeberler['category']=='İqtisadiyyat'){ ?>
<a itemprop="url" href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $xeberler['sef'];?>" title="<?=$xeberler['title'];?>" rel="bookmark">
	<?php echo $xeberler['title'];?>
</a>
<?php } elseif($xeberler['category']=='İdman'){ ?>
<a itemprop="url" href="<?php echo base_url('anasehife/idman_details/'); echo $xeberler['sef'];?>" title="<?=$xeberler['title'];?>" rel="bookmark">
	<?php echo $xeberler['title'];?>
</a>
<?php } elseif($xeberler['category']=='Dünya'){ ?>
<a itemprop="url" href="<?php echo base_url('anasehife/dunya_details/'); echo $xeberler['sef'];?>" title="<?=$xeberler['title'];?>" rel="bookmark">
	<?php echo $xeberler['title'];?>
</a>
<?php } elseif($xeberler['category']=='Cəmiyyət'){ ?>
<a itemprop="url" href="<?php echo base_url('anasehife/cemiyyet_details/'); echo $xeberler['sef'];?>" title="<?=$xeberler['title'];?>" rel="bookmark">
	<?php echo $xeberler['title'];?>
</a>
<?php } ?>
</h1>
<div class="post-meta">
<div class="post-meta-date"><i class="fa fa-calendar"></i><?php echo $xeberler['news_date'];?></div>
<div class="post-meta-category"><i class="fa fa-eye-o"></i><a href="#" rel="category tag"> oxunma sayı : 
<?php echo $xeberler['hit'];?></a></div>
<div class="post-meta-comment"><i class="fa fa-comments-o"></i><?php echo comment_getir($s_id); ?> rəy</div>
</div>
<div class="clearfix"></div>
<div class="post-inner">
<p><?php echo word_limiter($xeberler['news_text'],35);?></p>
<div class="post-more">
<?php if($xeberler['category']=='Siyasət') { ?>
<a class="button-default medium" href="<?php echo base_url('anasehife/siayset_details/'); echo $xeberler['sef'];?>" title="<?=$xeberler['title'];?>" rel="bookmark"><i class="fa fa-long-arrow-right"></i>Davamını oxu</a>
<?php } elseif($xeberler['category']=='Sosial'){ ?>
<a class="button-default medium" href="<?php echo base_url('anasehife/sosial_details/'); echo $xeberler['sef'];?>" title="<?=$xeberler['title'];?>" rel="bookmark"><i class="fa fa-long-arrow-right"></i>Davamını oxu</a>
<?php } elseif($xeberler['category']=='İqtisadiyyat'){ ?>
<a class="button-default medium" href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $xeberler['sef'];?>" title="<?=$xeberler['title'];?>" rel="bookmark"><i class="fa fa-long-arrow-right"></i>Davamını oxu</a>
<?php } elseif($xeberler['category']=='İdman'){ ?>
<a class="button-default medium" href="<?php echo base_url('anasehife/idman_details/'); echo $xeberler['sef'];?>" title="<?=$xeberler['title'];?>" rel="bookmark"><i class="fa fa-long-arrow-right"></i>Davamını oxu</a>
<?php } elseif($xeberler['category']=='Dünya'){ ?>
<a class="button-default medium" href="<?php echo base_url('anasehife/dunya_details/'); echo $xeberler['sef'];?>" title="<?=$xeberler['title'];?>" rel="bookmark"><i class="fa fa-long-arrow-right"></i>Davamını oxu</a>
<?php } elseif($xeberler['category']=='Cəmiyyət'){ ?>
<a class="button-default medium" href="<?php echo base_url('anasehife/cemiyyet_details/'); echo $xeberler['sef'];?>" title="<?=$xeberler['title'];?>" rel="bookmark"><i class="fa fa-long-arrow-right"></i>Davamını oxu</a>
<?php } ?>
</div>
<div class="clearfix"></div>
</div>
</div>
</article>	
<?php } ?>
</div>
</div>
</div>
<div class="not_duplicate_array" data-not_duplicate=""></div>
</div>
<!--pagination section start-->
  <?php echo $this->pagination->create_links();?>
<!--pagination section end-->
</div>


<div class="first-sidebar sidebar-col col-md-4 sticky-sidebar">
<aside class="sidebar">