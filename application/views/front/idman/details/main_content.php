<article class="v-post clearfix article-title-meta-image post-style-6 animation post--content image_post post-no-border post-1912 post type-post status-publish format-standard has-post-thumbnail hentry category-business" data-animate="fadeInUp" itemscope=""
itemtype="http://schema.org/Article">
<div class="post-img post-img-9">
<a title="<?=$info['title'];?>" rel="bookmark" class='post-img-link'>
<img alt='<?=$info['title'];?>' style="margin-bottom:15px;width:750px;height:350px;" src='<?php echo base_url(); echo $info['image'];?>'>
<h1 class="post-head-title">
<a itemprop="url" title="<?=$info['title'];?>" rel="bookmark">
<?php echo $info['title'];?><?=$info['title'];?>
</a>
</h1>
<div class="post-inner">
<p><?php echo $info['news_text'];?></p>
</div>
<div class="post-meta">
<div class="post-meta-date"><i class="fa fa-calendar"></i><?php echo $info['news_date'];?></div>
<!--<div class="post-meta-comment"><i class="fa fa-comments-o"></i>0 Yorum</div>-->
<div class="post-meta-view"><i class="fa fa-eye">&nbsp;Oxunma sayı : <?php echo $info['hit'];?></i></div>
</div>
</a>
</div>

</article>	
<?php if($info['com_status']==1){ ?>
<div class="post-title">
	<h3>Rəylər</h3>
</div>
<ol class="commentlist clearfix">
<div class="clearfix"></div>
<?php $c_say = comment_count($info['id']); foreach ($c_say as $sc_say): ?>
<li class="comment even thread-even depth-1 single-comment" id="li-comment-73">
	<div id="comment-73" class="comment-body">
		<div class="avatar">
			<img src="<?=base_url('assets/front/images/avatar.png');?>" alt="" srcset="<?=base_url('assets/front/images/avatar.png');?>" class="avatar avatar-70 photo" style="height:70px;width:70px;">
		</div>
		<div class="comment-text">
			<div class="author clearfix">
				<div class="comment-meta">
					<span class="comment-author fn"><?=$sc_say['fullname'];?></span>
					<div class="date">
						<a href="">
							<i class="fa fa-calendar"></i>
							<time><?=$sc_say['c_date'];?></time>
						</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="text">
				<p><?=$sc_say['comment'];?></p>
			</div>
		</div>
	</div>
</li>	
<?php endforeach ?>
</ol>

<div class="post-inner" style="margin-top:20px;">
	<?php echo $this->session->flashdata('info'); ?>
	<div class="post-title">
		<h3>RƏY BİLDİRİN</h3>
	</div>
	<div class="clearfix"></div>
	<div class="comment-form">
		<form action="<?=base_url('anasehife/comments');?>" method="POST" id="commentform">
			<div class="form-input">
				<input type="text" name="fullname" placeholder="ad soyadınızı yazın" required>
			</div>
			<div class="form-input form-input-last">
				<input type="email" name="email" placeholder="emailinizi yazın" required>
			</div>
			<div class="form-input form-textarea">
				<textarea name="comment" id="comment" required placeholder="rəy bildirin"></textarea>
			</div>
			<input type="submit" name="submit" id="submit" value="Rəy Bildir" class="button-default">
			<input type="hidden" name="subject_id" value="<?=$info['id'];?>">
			<input type="hidden" name="subject_sef" value="<?=$info['sef'];?>">
			<input type="hidden" name="subject_cat" value="<?=$info['category'];?>">
			<input type="hidden" name="ip" value="<?=getIP();?>">
			<div class="clearfix"></div>
		</form>
	</div>
</div>
<?php } ?>