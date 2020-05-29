<div class="with-sidebar-container">
<div class="col-md-12 main-container">
<div class="v-post post-contact-us post-no-border">
<div class="post-inner">
<div class="post-title"><h3>XƏBƏRLƏR</h3></div>
<div class="row">
<div class="col-md-12">
<div class="screen-reader-response"></div>
<h3>Xəbərlər</h3>
<?php $site = site_settings(); foreach ($site as $info): ?>
<strong>Ünvan : <?php echo $info['adress'];?></strong> <br><br>
<strong>Telefon : <?php echo $info['phone'];?></strong> <br><br>
<strong>Email : <?php echo $info['email'];?></strong><br><br>	
<strong>Haqqımızda : <?php echo $info['info'];?></strong>
<?php endforeach ?>

</div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
