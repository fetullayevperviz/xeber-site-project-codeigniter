    <section class="content">
       <div class="card card-info">
	      <div class="card-header">
	        <h3 class="card-title">Xəbər Yeniləmə Formu</h3>
	      </div>
	      <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?= base_url('admin/news_edit');?>">
	        <div class="card-body">

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Xəbərin Şəkili</label>
	            <div class="col-sm-10">
	              <input type="file" name="image" class="form-control">
	            </div>
	          </div>

	          <div class="form-group row">
	          	 <label class="col-sm-2 col-form-label">Hal hazırda xəbərin şəkili</label>
	          	 <div class="col-sm-10">
	          	 	<img src="<?php echo base_url(); echo $info['tmb']; ?>" class="profile-user-img img-fluid">
	          	 </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Xəbərin Başlığı</label>
	            <div class="col-sm-10">
	              <input type="text" name="title" class="form-control" value="<?=$info['title'];?>">
	              <input type="hidden" name="id" value="<?=$info['id'];?>">
	              <input type="hidden" name="status" value="<?=$info['status'];?>">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Xəbərin Tarixi</label>
	            <div class="col-sm-10">
	              <input type="date" name="news_date" class="form-control" value="<?=$info['news_date'];?>">
	            </div>
	          </div>

	          <div class="form-group row">
	          	 <label class="col-sm-2 col-form-label">Kateqoriya</label>
	          	 <div class="col-sm-10">
	          	 	<select class="form-control" name="cat_id">
					   <?php $info1 = category_list(); foreach($info1 as $info1)
				             { 
				                if($info1['id']==$info['cat_id']){ ?>
						           <option selected value="<?=$info1['id'];?>"><?=$info1['title'];?></option>
					                <?php } 
					                else{ ?>
					                   <option value="<?=$info1['id'];?>"><?=$info1['title'];?></option>   
						<?php } } ?>
					 </select>
	          	 </div>
	          </div>

	           <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Xəbərin Rəy icazəsi</label>
	            <div class="col-sm-10">
	              <select name="com_status" class="form-control">
	              	<?php if($info['com_status']==1){ ?>
	              	  <option selected value="1">Rəy bildirilsin</option>
	              	  <option value="0">Rəy bildirilməsin</option>
	              	<?php } else{ ?>
	              	  <option value="1">Rəy bildirilsin</option>
	              	  <option selected value="0">Rəy bildirilməsin</option>
	              	<?php } ?>
	              </select>
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Xəbərin Başlıq icazəsi</label>
	            <div class="col-sm-10">
	              <select name="last_minute" class="form-control">
	              	<?php if($info['last_minute']==1){ ?>
	              	  <option selected value="1">Adi Xəbər</option>
	              	  <option value="0">Son Dəqiqə Xəbəri</option>
	              	<?php } else{ ?>
	              		<option value="1">Adi Xəbər</option>
	              		<option selected value="0">Son Dəqiqə Xəbəri</option>
	              	<?php } ?>
	              </select>
	            </div>
	          </div>
              
              <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Xəbərin Açar Sözləri</label>
	            <div class="col-sm-10">
	              <input type="text" name="news_tag" class="form-control" value="<?=$info['news_tag'];?>">
	            </div>
	          </div>

	          <div class="form-group row">
	            <label class="col-sm-2 col-form-label">Xəbərin Mətni</label>
	            <div class="col-sm-10">
	              <textarea name="editor1" class="form-control">
                          <?=$info['news_text'];?>
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
	          	 Yenilə
	          </button>
	        </div>
	        <!-- /.card-footer -->
	      </form>
	    </div>
    </section>
    <!-- /.content -->