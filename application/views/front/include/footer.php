<footer id="main-footer">
<div class="top-footer top-footer-2" style=" padding-top:60px; padding-bottom:60px;">
<div class="container">
<div class="row">
<div class="col-md-4">
<div id="about_me-widget-4" class="widget widget-about">
<div class="widget-title">
<h3>Haqqımızda</h3></div>
<div class="clearfix"></div>
<div class="widget-wrap">
<div class="about-widget">
<div class="widget-about-img">
<a href='<?=base_url();?>' data-rel='prettyPhoto'><img alt='' src='<?=base_url("assets/front/");?>images/logodark.png'></a> </div>
<?php $info = site_settings(); foreach ($info as $info): ?>
<p style='margin-top: 20px'><span style="color:white;font-weight:bold;"><?php echo word_limiter($info['info'],40);?></span></p>
<p style='margin-top: 10px'><span style="color:white;font-weight:bold;">Əlaqə : <?php echo $info['phone'];?></span></p>
<p style='margin-top: 10px'><span style="color:white;font-weight:bold;">Email : <?php echo $info['email'];?></span></p>
<p style='margin-top: 10px'><span style="color:white;font-weight:bold;">Ünvan : <?php echo $info['adress'];?></span></p>
<?php endforeach ?>

</div>
</div>
</div>
</div>
<div class="col-md-4">
<div id="widget_posts-7" class="widget widget-posts">
<div class="widget-title">
<h3>Son Xəbərlər</h3></div>
<div class="clearfix"></div>
<div class="widget-wrap">
<ul class='widget-posts'>

<?php $info = sonxeber1(); foreach ($info as $info){ $s_id = $info['id']; ?>
<li class="widget-posts-image">
<div class="box-news-small">
<div class="box-news-img">
<img alt='' width='94' height='73' src='<?php echo base_url(); echo $info['tmb'];;?>'>
<div class="box-news-overlay">
<?php if($info['category']=='Siyasət') { ?>
<a href="<?php echo base_url('anasehife/siyaset_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"></a>
<?php } elseif($info['category']=='Sosial'){ ?>
<a href="<?php echo base_url('anasehife/sosial_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"></a>
<?php } elseif($info['category']=='İqtisadiyyat'){ ?>
<a href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"></a>
<?php } elseif($info['category']=='İdman'){ ?>
<a href="<?php echo base_url('anasehife/idman_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"></a>
<?php } elseif($info['category']=='Dünya'){ ?>
<a href="<?php echo base_url('anasehife/dunya_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"></a>
<?php } elseif($info['category']=='Cəmiyyət'){ ?>
<a href="<?php echo base_url('anasehife/cemiyyet_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"></a>
<?php } ?>
</div>
</div>
<div class="box-news-content">
<div class="box-news-title">
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
</div>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo $info['news_date'];?></time>
<i class="fa fa-comments-o"></i><?php echo comment_getir($s_id); ?> rəy <br>
<i class="fa fa-eye-o"></i> oxunma sayı : <?php echo $info['hit'];?>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
</li>
	
<?php } ?>

</ul>
</div>
</div>
</div>


<div class="col-md-4">
<div id="widget_posts-7" class="widget widget-posts">
<div class="widget-title">
<h3>Çox Oxunan Xəbərlər</h3></div>
<div class="clearfix"></div>
<div class="widget-wrap">
<ul class='widget-posts'>

<?php $info = hit_xeber1(); foreach ($info as $info){ $s_id = $info['id']; ?>
<li class="widget-posts-image">
<div class="box-news-small">
<div class="box-news-img">
<img alt='' width='94' height='73' src='<?php echo base_url(); echo $info['tmb'];;?>'>
<div class="box-news-overlay">
<?php if($info['category']=='Siyasət') { ?>
<a href="<?php echo base_url('anasehife/siyaset_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"></a>
<?php } elseif($info['category']=='Sosial'){ ?>
<a href="<?php echo base_url('anasehife/sosial_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"></a>
<?php } elseif($info['category']=='İqtisadiyyat'){ ?>
<a href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"></a>
<?php } elseif($info['category']=='İdman'){ ?>
<a href="<?php echo base_url('anasehife/idman_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"></a>
<?php } elseif($info['category']=='Dünya'){ ?>
<a href="<?php echo base_url('anasehife/dunya_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"></a>
<?php } elseif($info['category']=='Cəmiyyət'){ ?>
<a href="<?php echo base_url('anasehife/cemiyyet_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"></a>
<?php } ?>
</div>
</div>
<div class="box-news-content">
<div class="box-news-title">
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
</div>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo $info['news_date'];?></time>
<i class="fa fa-comments-o"></i><?php echo comment_getir($s_id); ?> rəy <br>
<i class="fa fa-eye-o"></i> oxunma sayı : <?php echo $info['hit'];?>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
</li>
<?php } ?>

</ul>
</div>
</div>
</div>

</div>
</div>
</div>

<div id="footer" class='main-block footer-normal footer-social-copyrights footer-have-top footer-2'>
<div class="container">
<div class="social-ul">
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

<div class="copyrights">Copyright <?php echo date('Y');?> Coder By <a href='<?=base_url();?>' target=_blank> Pərviz Fətullayev</a></div>
</div>
</div>
</footer>
<div class="clearfix"></div>
</div>
</div>
<div class="go-up"><i class="fa fa-chevron-up"></i></div>



<script type='text/javascript' src='<?=base_url("assets/front/");?>js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
<script type='text/javascript' src='<?=base_url("assets/front/");?>js/scripts8a54.js?ver=1.0.0'></script>
<script type='text/javascript' src='<?=base_url("assets/front/");?>js/custom8a54.js?ver=1.0.0'></script>
<script type='text/javascript' src='<?=base_url("assets/front/");?>js/custom.js?ver=1.0.0'></script>
<script type='text/javascript' src='<?=base_url("assets/front/");?>js/page.js'></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>