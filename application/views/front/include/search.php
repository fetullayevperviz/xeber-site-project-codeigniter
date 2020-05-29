<div id="search-3" class="widget widget_search">
<div class="widget-title">
<h3>Xəbər axtar</h3></div>
<div class="clearfix"></div>
<form role="search" method="get" class="search-form" action="<?=base_url('anasehife/index');?>">
<label>
<span class="screen-reader-text">Search for:</span>
<input type="search" class="search-field" placeholder="xəbər axtar &hellip;" name="search"/>
</label>
<input type="submit" class="search-submit" value="Xəbər axtar"/>
</form>
<?php if(isset($search_xeber)) { 
	if(count($search_xeber) > 0) { ?>
	<ul>
	<?php foreach ($search_xeber as $key) { ?>
		<?php if($key['category']=='Siyasət') { ?>
		<a href="<?php echo base_url('anasehife/siyaset_details/'); echo $key['sef'];?>" title="<?=$key['title'];?>" rel="bookmark"><li style="margin-bottom:5px;margin-top:5px;"><?=$key['title'];?></li></a>
		<?php } elseif($key['category']=='Sosial'){ ?>
		<a href="<?php echo base_url('anasehife/sosial_details/'); echo $key['sef'];?>" title="<?=$key['title'];?>" rel="bookmark"><li style="margin-bottom:5px;margin-top:5px;"><?=$key['title'];?></li></a>
		<?php } elseif($key['category']=='İqtisadiyyat'){ ?>
		<a href="<?php echo base_url('anasehife/iqtisadiyyat_details/'); echo $key['sef'];?>" title="<?=$key['title'];?>" rel="bookmark"><li style="margin-bottom:5px;margin-top:5px;"><?=$key['title'];?></li></a>
		<?php } elseif($key['category']=='İdman'){ ?>
		<a href="<?php echo base_url('anasehife/idman_details/'); echo $key['sef'];?>" title="<?=$key['title'];?>" rel="bookmark"><li style="margin-bottom:5px;margin-top:5px;"><?=$key['title'];?></li></a>
		<?php } elseif($key['category']=='Dünya'){ ?>
		<a href="<?php echo base_url('anasehife/dunya_details/'); echo $key['sef'];?>" title="<?=$key['title'];?>" rel="bookmark"><li style="margin-bottom:5px;margin-top:5px;"><?=$key['title'];?></li></a>
		<?php } elseif($key['category']=='Cəmiyyət'){ ?>
		<a href="<?php echo base_url('anasehife/cemiyyet_details/'); echo $key['sef'];?>" title="<?=$key['title'];?>" rel="bookmark"><li style="margin-bottom:5px;margin-top:5px;"><?=$key['title'];?></li></a>
		<?php } ?>
	<?php } ?>	
	</ul>
<?php } else { ?>
<?php echo '<ul><li>Sorğulanan başlığa uyğun xəbər tapılmadı</li></ul>'; } } ?>
</div>