<div id="widget_posts-5" class="widget widget-posts">
<div class="widget-title">
<h3>Köşə Yazarları</h3></div>
<div class="clearfix"></div>
<div class="widget-wrap">
<ul class='widget-posts'>
<?php $info = kose_yazar(); foreach ($info as $info): ?>
<li class="widget-posts-image">
<div class="box-news-small">
<div class="box-news-img">
<img alt='' style="object-fit:contain;" width='94' height='73' src='<?php echo base_url(); echo $info['image'];?>'>
<div class="box-news-overlay">
	<a title="<?=$info['fullname'];?>" rel="bookmark"></a>
</div>
</div>
<div class="box-news-content">
<div class="box-news-title">
	<a title="<?=$info['fullname'];?>" rel="bookmark"><?php echo $info['fullname'];?></a></div>
<div class="box-news-meta">
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
</li>
<?php endforeach ?>
</ul>
</div>
</div>
</aside>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</div>