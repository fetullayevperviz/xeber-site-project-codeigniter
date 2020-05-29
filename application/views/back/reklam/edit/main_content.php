    <section class="content">
       <div class="card card-info">
	      <div class="card-header">
	        <h3 class="card-title">Reklam Yeniləmə Formu</h3>
	      </div>
	      <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?= base_url('admin/reklam_edit');?>">
	        <div class="card-body">

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Reklam Şəkili</label>
	            <div class="col-sm-10">
	              <input type="file" name="image" class="form-control">
	            </div>
	          </div>

	          <div class="form-group row">
	          	 <label class="col-sm-2 col-form-label">Hal hazırda reklamın şəkili</label>
	          	 <div class="col-sm-10">
	          	 	<img src="<?php echo base_url(); echo $info['image']; ?>" class="profile-user-img img-fluid">
	          	 </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Firma Adı</label>
	            <div class="col-sm-10">
	              <input type="text" name="firma" class="form-control" value="<?=$info['firma'];?>">
	              <input type="hidden" name="id" value="<?=$info['id'];?>">
	              <input type="hidden" name="status" value="<?=$info['status'];?>">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Reklam Linki</label>
	            <div class="col-sm-10">
	              <input type="text" name="link" class="form-control" value="<?=$info['link'];?>">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Başlanğıc Tarixi</label>
	            <div class="col-sm-10">
	              <input type="date" name="start_date" class="form-control" value="<?=$info['start_date'];?>">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Bitiş Tarixi</label>
	            <div class="col-sm-10">
	              <input type="date" name="end_date" class="form-control" value="<?=$info['end_date'];?>">
	            </div>
	          </div>
  
	        </div>
	        <!-- /.card-body -->
	        <div class="card-footer">
	          <button type="submit" class="btn btn-dark">
	          	  <a href="<?=base_url('admin/reklam');?>" style="color:white;">Geri Qayıt</a>
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