<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
           <h6 style="color:white;"><?php echo $info['title'];?></h6>
        </div>
        <div class="card-body">
          <div class="chart">
           <div class="col-md-4" style="float:left;">
           <img src="<?php echo base_url(); echo $info['tmb']; ?>" style="height:300px;width:300px;object-fit:contain;">
           </div>
           <div class="col-md-8" style="float:left;margin-top:50px;">
               <p style="color:black;">Kateqoriya : <?php echo $info['category'];?></p>
               <p style="color:black;">Oxunma sayı : <?php echo $info['hit'];?></p>
               <p style="color:black;">Yazılma tarixi : <?php echo $info['news_date'];?></p>
               <p style="color:black;">Xəbərin Mətni : <br> - <?php echo $info['news_text'];?></p>
           </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <button class="btn btn-dark" style="margin-left:5px;margin-bottom:15px;"><a style="color:white;" href="<?=base_url('admin');?>">Geri Qayıt</a></button>
  </div>
</section>