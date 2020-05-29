 <!-- Main content -->
    <section class="content">
       <div class="card card-info">
	      <div class="card-header">
	        <h3 class="card-title">Site Parametrlərini Yeniləmə Formu</h3>
	      </div>
	      <form class="form-horizontal" method="POST" action="<?= base_url('admin/settings_edit');?>">
	        <div class="card-body">

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Site Başlıq</label>
	            <div class="col-sm-10">
	              <input type="text" name="title" class="form-control" value="<?= $info['title'];?>">
	              <input type="hidden" name="id" value="<?=$info['id'];?>">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Site Url</label>
	            <div class="col-sm-10">
	              <input type="text" name="url" class="form-control" value="<?= $info['url'];?>">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Site Email</label>
	            <div class="col-sm-10">
	              <input type="email" name="email" class="form-control" value="<?= $info['email'];?>">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Site Telefon</label>
	            <div class="col-sm-10">
	              <input type="text" name="phone" class="form-control" value="<?= $info['phone'];?>">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Site Description</label>
	            <div class="col-sm-10">
	              <input type="text" name="site_desc" class="form-control" value="<?= $info['site_desc'];?>">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Site Keyword</label>
	            <div class="col-sm-10">
	              <input type="text" name="site_keyword" class="form-control" value="<?= $info['site_keyword'];?>">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Site Ünvanı</label>
	            <div class="col-sm-10">
	              <textarea name="adress" class="form-control"><?=$info['adress'];?></textarea>
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Site Haqqında</label>
	            <div class="col-sm-10">
	              <textarea name="info" class="form-control"><?=$info['info'];?></textarea>
	            </div>
	          </div>

	        </div>
	        <!-- /.card-body -->
	        <div class="card-footer">
	          <button type="submit" class="btn btn-dark">
	          	  <a href="<?=base_url('admin/settings');?>" style="color:white;">Geri Qayıt</a>
	          </button>
	          <button type="submit" class="btn btn-success float-right">
	          	 Yenilə
	          </button>
	        </div>
	        <!-- /.card-footer -->
	      </form>
	    </div>
    </section>
    <!-- /.content -->