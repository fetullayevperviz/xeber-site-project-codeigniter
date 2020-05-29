    <section class="content">
       <div class="card card-info">
	      <div class="card-header">
	        <h3 class="card-title">Xəbər Əlavə Etmə Formu</h3>
	      </div>
	      <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?= base_url('admin/news_insert');?>">
	        <div class="card-body">

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Xəbərin Başlığı</label>
	            <div class="col-sm-10">
	              <input type="text" name="title" class="form-control" placeholder="xəbərin başlığını yazın">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Xəbərin Kateqoriyası</label>
	            <div class="col-sm-10">
	              <select name="cat_id" class="form-control">
	              	  <?php foreach ($info as $category): ?>
	              	  	  <?php if($category['status']==1): ?>
	              	  	     <option value="<?= $category['id'];?>"><?= $category['title'];?></option>
	              	  	  <?php endif ?>
	              	  <?php endforeach ?>
	              </select>
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Xəbərin Şəkili</label>
	            <div class="col-sm-10">
	              <input type="file" name="image" class="form-control">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Xəbərin Tarixi</label>
	            <div class="col-sm-10">
	              <input type="date" name="news_date" class="form-control">
	            </div>
	          </div>

	           <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Xəbərin Rəy icazəsi</label>
	            <div class="col-sm-10">
	              <select name="com_status" class="form-control">
	              	  <option value="1">Rəy bildirilsin</option>
	              	  <option value="0">Rəy bildirilməsin</option>
	              </select>
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Xəbərin Başlıq icazəsi</label>
	            <div class="col-sm-10">
	              <select name="last_minute" class="form-control">
	              	  <option value="1">Adi Xəbər</option>
	              	  <option value="0">Son Dəqiqə Xəbəri</option>
	              </select>
	            </div>
	          </div>
              
              <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Xəbərin Açar Sözləri</label>
	            <div class="col-sm-10">
	              <input type="text" name="news_tag" class="form-control" placeholder="vergül qoyaraq yazın">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Xəbərin Mətni</label>
	            <div class="col-sm-10">
	              <textarea name="editor1" class="form-control">
                  </textarea>
	            </div>
	          </div>

	        </div>
	        <!-- /.card-body -->
	        <div class="card-footer">
	          <button type="submit" class="btn btn-dark">
	          	  <a href="<?=base_url('admin/news');?>" style="color:white;">Geri Qayıt</a>
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