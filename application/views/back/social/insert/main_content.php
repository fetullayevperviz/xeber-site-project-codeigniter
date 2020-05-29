 <!-- Main content -->
    <section class="content">
       <div class="card card-info">
	      <div class="card-header">
	        <h3 class="card-title">Sosial Şəbəkə Əlavə Etmə Formu</h3>
	      </div>
	      <form class="form-horizontal" method="POST" action="<?= base_url('admin/social_insert');?>">
	        <div class="card-body">

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Sosial Şəbəkə Adı</label>
	            <div class="col-sm-10">
	              <input type="text" name="title" class="form-control" placeholder="Sosial şəbəkə adını yazın">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Sosial Şəbəkə Url</label>
	            <div class="col-sm-10">
	              <input type="text" name="url" class="form-control" placeholder="http:// ilə yazın ">
	            </div>
	          </div>

	        </div>
	        <!-- /.card-body -->
	        <div class="card-footer">
	          <button type="submit" class="btn btn-dark">
	          	  <a href="<?=base_url('admin/social_media');?>" style="color:white;">Geri Qayıt</a>
	          </button>
	          <button type="submit" class="btn btn-success float-right">
	          	 Əlavə Et
	          </button>
	        </div>
	        <!-- /.card-footer -->
	      </form>
	    </div>
    </section>
    <!-- /.content -->