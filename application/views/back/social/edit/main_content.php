 <!-- Main content -->
    <section class="content">
       <div class="card card-info">
	      <div class="card-header">
	        <h3 class="card-title">Sosial Şəbəkə Hesabını Yeniləmə Formu</h3>
	      </div>
	      <form class="form-horizontal" method="POST" action="<?= base_url('admin/social_edit');?>">
	        <div class="card-body">

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Sosial Şəbəkə Adı</label>
	            <div class="col-sm-10">
	              <input type="text" name="title" class="form-control" value="<?= $info['title'];?>">
	              <input type="hidden" name="id" value="<?=$info['id'];?>">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Sosial Şəbəkə Url</label>
	            <div class="col-sm-10">
	              <input type="text" name="url" class="form-control" value="<?= $info['url'];?>">
	            </div>
	          </div>

	        </div>
	        <!-- /.card-body -->
	        <div class="card-footer">
	          <button type="submit" class="btn btn-dark">
	          	  <a href="<?=base_url('admin/social_media');?>" style="color:white;">Geri Qayıt</a>
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