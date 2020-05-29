    <section class="content">
       <div class="card card-info">
	      <div class="card-header">
	        <h3 class="card-title">Köşə Yazarı Yeniləmə Formu</h3>
	      </div>
	      <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?= base_url('admin/k_yazar_edit');?>">
	        <div class="card-body">

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Yazarın Şəkili</label>
	            <div class="col-sm-10">
	              <input type="file" name="image" class="form-control">
	            </div>
	          </div>

	          <div class="form-group row">
	          	 <label class="col-sm-2 col-form-label">Hal hazırda yazarın şəkili</label>
	          	 <div class="col-sm-10">
	          	 	<img src="<?php echo base_url(); echo $info['mini']; ?>" class="profile-user-img img-fluid">
	          	 </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Ad Soyad</label>
	            <div class="col-sm-10">
	              <input type="text" name="fullname" class="form-control" value="<?=$info['fullname'];?>">
	              <input type="hidden" name="id" value="<?=$info['id'];?>">
	              <input type="hidden" name="status" value="<?=$info['status'];?>">
	            </div>
	          </div>
  
	        </div>
	        <!-- /.card-body -->
	        <div class="card-footer">
	          <button type="submit" class="btn btn-dark">
	          	  <a href="<?=base_url('admin/k_yazar');?>" style="color:white;">Geri Qayıt</a>
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