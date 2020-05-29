<div id="widget_posts-5" class="widget widget-posts">
<div class="widget-title">
<h3>Son Xəbərlər</h3></div>
<div class="clearfix"></div>
<div class="widget-wrap">
<ul class='widget-posts'>

<?php $info = sonxeber(); foreach($info as $info){ $s_id = $info['id']; ?>
<li class="widget-posts-image">
<div class="box-news-small">
<div class="box-news-img">
<img alt='<?=$info['title'];?>' width='94' height='73' src='<?php echo base_url(); echo $info['tmb'];?>'>
<?php if($info['category']=='Siyasət') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasehife/siyaset_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"></a></div>
<?php } elseif($info['category']=='Sosial'){ ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasehife/sosial_details/'); echo $info['sef'];?>"title="<?=$info['title'];?>" rel="bookmark"></a></div>
<?php } elseif($info['category']=='İqtisadiyyat'){ ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $info['sef'];?>"title="<?=$info['title'];?>" rel="bookmark"></a></div>
<?php } elseif($info['category']=='İdman'){ ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasehife/idman_details/'); echo $info['sef'];?>"title="<?=$info['title'];?>" rel="bookmark"></a></div>
<?php } elseif($info['category']=='Dünya'){ ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasehife/dunya_details/'); echo $info['sef'];?>"title="<?=$info['title'];?>" rel="bookmark"></a></div>
<?php } elseif($info['category']=='Cəmiyyət'){ ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasehife/cemiyyet_details/'); echo $info['sef'];?>"title="<?=$info['title'];?>" rel="bookmark"></a></div>
<?php } ?>
</div>
<div class="box-news-content">
<?php if($info['category']=='Siyasət') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasehife/siyaset_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"><?php echo $info['title'];?></a></div>
<?php } elseif($info['category']=='Sosial'){ ?>
<div class="box-news-title"><a href="<?php echo base_url('anasehife/sosial_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"><?php echo $info['title'];?></a></div>
<?php } elseif($info['category']=='İqtisadiyyat'){ ?>
<div class="box-news-title"><a href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"><?php echo $info['title'];?></a></div>
<?php } elseif($info['category']=='İdman'){ ?>
<div class="box-news-title"><a href="<?php echo base_url('anasehife/idman_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"><?php echo $info['title'];?></a></div>
<?php } elseif($info['category']=='Dünya'){ ?>
<div class="box-news-title"><a href="<?php echo base_url('anasehife/dunya_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"><?php echo $info['title'];?></a></div>
<?php } elseif($info['category']=='Cəmiyyət'){ ?>
<div class="box-news-title"><a href="<?php echo base_url('anasehife/cemiyyet_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark"><?php echo $info['title'];?></a></div>
<?php } ?>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo $info['news_date'];?></time>
<a class="box-news-meta-comment"><i class="fa fa-comments-o"></i><?php echo comment_getir($s_id); ?> rəy</a>
<a class="box-news-meta-comment"><i class="fa fa-eye-o"></i> oxunma sayı : <?php echo $info['hit'];?></a>
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