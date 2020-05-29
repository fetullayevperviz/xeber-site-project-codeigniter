<div class="with-sidebar-container">
<div class="col-md-12 main-container">
<div class="v-post post-contact-us post-no-border">
<div class="post-inner">
<div class="post-title"><h3>ƏLAQƏ FORMU</h3></div>
<div class="row">
<?php echo $this->session->flashdata('info'); ?>
<div class="col-md-12">
<div class="comment-form vpanel-form">
<div class="screen-reader-response"></div>

<form action="<?php echo base_url('anasehife/send_message');?>" method="post">
<p>Ad Soyad<br />
<span class="wpcf7-form-control-wrap">
	<input type="text" name="fullname" size="40" required />
</span>
</p>
<p>Email<br />
<span class="wpcf7-form-control-wrap">
	<input type="email" name="email" size="40" required />
</span>
</p>
<p>Mövzu<br />
<span class="wpcf7-form-control-wrap">
	<input type="text" name="subject" size="40" required />
</span>
</p>
<input type="hidden" name="ip" value="<?php echo getIP();?>">
<p>Mesajınız<br />
<span class="wpcf7-form-control-wrap">
	<textarea name="message" rows="5" required></textarea>
</span>
</p>
</div>
<p><input type="submit" value="Göndər" /></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
