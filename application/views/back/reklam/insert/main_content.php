    <section class="content">
       <div class="card card-info">
	      <div class="card-header">
	        <h3 class="card-title">Reklam Əlavə Etmə Formu</h3>
	      </div>
	      <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?= base_url('admin/reklam_insert');?>">
	        <div class="card-body">

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Firma Adı</label>
	            <div class="col-sm-10">
	              <input type="text" name="firma" class="form-control" placeholder="firma adını yazın">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Reklam Link</label>
	            <div class="col-sm-10">
	              <input type="text" name="link" class="form-control" placeholder="reklam linkini yazın">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Başlanğıc Tarixi</label>
	            <div class="col-sm-10">
	              <input type="date" name="start_date" class="form-control">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Bitiş Tarixi</label>
	            <div class="col-sm-10">
	              <input type="date" name="end_date" class="form-control">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Reklam Şəkili</label>
	            <div class="col-sm-10">
	              <input type="file" name="image" class="form-control">
	            </div>
	          </div>

	        </div>
	        <!-- /.card-body -->
	        <div class="card-footer">
	          <button type="submit" class="btn btn-dark">
	          	  <a href="<?=base_url('admin/reklam');?>" style="color:white;">Geri Qayıt</a>
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