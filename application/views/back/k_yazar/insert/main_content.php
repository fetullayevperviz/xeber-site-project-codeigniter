    <section class="content">
       <div class="card card-info">
	      <div class="card-header">
	        <h3 class="card-title">Köşə Yazarı Əlavə Etmə Formu</h3>
	      </div>
	      <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?= base_url('admin/k_yazar_insert');?>">
	        <div class="card-body">

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Ad Soyad</label>
	            <div class="col-sm-10">
	              <input type="text" name="fullname" class="form-control" placeholder="ad soyad yazın">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Yazarın Şəkili</label>
	            <div class="col-sm-10">
	              <input type="file" name="image" class="form-control">
	            </div>
	          </div>

	        </div>
	        <!-- /.card-body -->
	        <div class="card-footer">
	          <button type="submit" class="btn btn-dark">
	          	  <a href="<?=base_url('admin/k_yazar');?>" style="color:white;">Geri Qayıt</a>
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