    <section class="content">
       <div class="card card-info">
	      <div class="card-header">
	        <h3 class="card-title">Rəyləri Yeniləmə Formu</h3>
	      </div>
	      <form class="form-horizontal" method="POST" action="<?= base_url('admin/comment_edit');?>">
	        <div class="card-body">

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Ad Soyad</label>
	            <div class="col-sm-10">
	              <input type="text" name="fullname" class="form-control" value="<?=$info['fullname'];?>">
	              <input type="hidden" name="id" value="<?=$info['id'];?>">
	              <input type="hidden" name="status" value="<?=$info['status'];?>">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Email</label>
	            <div class="col-sm-10">
	              <input type="email" name="email" disabled class="form-control" value="<?=$info['email'];?>">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Yazılma Tarixi</label>
	            <div class="col-sm-10">
	              <input type="text" name="c_date" disabled class="form-control" value="<?=$info['c_date'];?>">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">ip Adresi</label>
	            <div class="col-sm-10">
	              <input type="text" name="ip" disabled class="form-control" value="<?=$info['ip'];?>">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Rəy</label>
	            <div class="col-sm-10">
	            	<textarea name="comment" class="form-control"><?=$info['comment'];?></textarea>
	            </div>
	          </div>
  
  
	        </div>
	        <!-- /.card-body -->
	        <div class="card-footer">
	          <button type="submit" class="btn btn-dark">
	          	  <a href="<?=base_url('admin/comment');?>" style="color:white;">Geri Qayıt</a>
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