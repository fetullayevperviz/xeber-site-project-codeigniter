<div class='widget tabs-warp widget-tabs'>
<div class="widget-title widget-title-tabs">
<ul class="tabs tabs359">
<li class="tab"><a href="#">Çox Oxunanlar</a></li>
<li class="tab"><a href="#">Rəylər</a></li>
<li class="tab"><a href="#">Başlıqlar</a></li>
<li class="clearfix"></li>
</ul>
</div>
<div class="widget-wrap">
<div class='tab-inner-warp tab-inner-warp359'>
<ul class='widget-posts'>

<?php $cox_oxunan = hit_xeber(); foreach($cox_oxunan as $info) : $s_id = $info['id']; ?>
<li class="widget-posts-slideshow">
<div class="box-news-small">
<div class="box-news-img">
<img alt='Gallery Post full width with meta' width='94' height='73' src='<?php echo base_url(); echo $info['tmb'];?>'>
<div class="box-news-overlay">
<?php if($info['category']=='Siyasət') { ?>
<a href="<?php echo base_url('anasehife/siyaset_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>"  rel="bookmark"></a>
<?php } elseif($info['category']=='Sosial'){ ?>
<a href="<?php echo base_url('anasehife/sosial_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>"  rel="bookmark"></a>
<?php } elseif($info['category']=='İqtisadiyyat'){ ?>
<a href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>"  rel="bookmark"></a>
<?php } elseif($info['category']=='İdman'){ ?>
<a href="<?php echo base_url('anasehife/idman_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>"  rel="bookmark"></a>
<?php } elseif($info['category']=='Dünya'){ ?>
<a href="<?php echo base_url('anasehife/dunya_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>"  rel="bookmark"></a>
<?php } elseif($info['category']=='Cəmiyyət'){ ?>
<a href="<?php echo base_url('anasehife/cemiyyet_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>"  rel="bookmark"></a>
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
<a class="box-news-meta-comment"><i class="fa fa-comments-o"></i><?php echo comment_getir($s_id); ?> rəy</a>
</div>
<div class="box-news-meta-view"><i class="fa fa-eye"></i> oxunma sayı : <?php echo $info['hit'];?></div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
</li>	
<?php endforeach; ?>

</ul>
</div>
<div class='tab-inner-warp tab-inner-warp359'>
<div class='widget-comments'>
<ol class='commentlist clearfix'>

<?php $comment = comment(); foreach ($comment as $comment): ?>
<li class="comment">
<div class="comment-body">
<div class="avatar">
<a>
<img alt='avatar' src='<?=base_url("assets/front/");?>images/avatar.png'>
</a>
</div>
<div class="comment-text">
<div class="author clearfix">
<div class="comment-meta">
<span class="comment-author fn"><a href='#' target='_blank'><?php echo $comment['fullname'];?></a></span>
<div class="clearfix"></div>
</div>
</div>
<div class="text">
<p><a><?php echo word_limiter($comment['comment'],15);?></a></p>
</div>
</div>
</div>
</li>
<?php endforeach; ?>

</ol>
</div>
</div>
<div class='tab-inner-warp tab-inner-warp359'>
<div class='widget_tag_cloud'>

<?php 
     $tag = tag(); 
     foreach ($tag as $tag)
     { 
     	$tag = explode(",", $tag['news_tag']);
     	foreach ($tag as $etiket) { ?>
     		<a href="#" class="tag-cloud-link" style="font-size: 13.6pt;"><?php echo $etiket;?></a>
<?php } } ?>

</div>
</div>
</div>
</div>