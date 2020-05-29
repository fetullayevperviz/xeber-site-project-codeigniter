<?php foreach ($info as $info){ $s_id = $info['id']; ?>
<article class="v-post clearfix article-title-meta-image post-style-6 animation post--content image_post post-no-border post-1912 post type-post status-publish format-standard has-post-thumbnail hentry category-business" data-animate="fadeInUp" itemscope=""
itemtype="http://schema.org/Article">
<div class="post-img post-img-9">
<a href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark" class='post-img-link'>
<img alt='' width='750' height='354' src='<?php echo base_url(); echo $info['tmb'];?>'>
</a>
</div>
<div class='post-inner-6'>
<h1 class="post-head-title">
<a itemprop="url" href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark">
<?php echo $info['title'];?>
</a>
</h1>
<div class="post-inner">
<p><?php echo word_limiter($info['news_text'],25);?></p>
</div>
<div class="post-meta">
<div class="post-meta-date"><i class="fa fa-calendar"></i><?php echo $info['news_date'];?></div>
<div class="post-meta-comment"><i class="fa fa-comments-o"></i><?php echo comment_getir($s_id); ?> rəy</div>
<div class="post-meta-view"><i class="fa fa-eye">&nbsp;Oxunma sayı : <?php echo $info['hit'];?></i></div>
</div>
<div class="post-more">
	<a class="button-default medium" href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $info['sef'];?>" title="<?=$info['title'];?>" rel="bookmark">
		<i class="fa fa-long-arrow-right"></i>Davamını oxu
	</a>
</div>
</div>
</article>	
<?php } ?>

<!--pagination section start-->
<?php echo $this->pagination->create_links();?>
<!--pagination section end-->
