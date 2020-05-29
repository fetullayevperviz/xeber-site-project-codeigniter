<div id="widget_counter-4" class="widget widget-statistics widget-margin-custom widget-margin-20">
<div class="widget-title">
<h3>SOSİAL ŞƏBƏKƏLƏR</h3></div>
<div class="clearfix"></div>
<div class="widget-wrap">
<div class="social-ul">
<ul class=" social-background">
<?php $social = social_media(); foreach ($social as $social): ?>
<li class="social-<?=$social['sef'];?>">
	<a class="tooltip-n" href="<?=$social['url'];?>" target='_blank'>
	   <i class="fa fa-<?=$social['sef'];?>"></i>
    </a>
</li>
<?php endforeach ?>
</ul>
</div>
<div class="clearfix"></div>
</div>
</div>