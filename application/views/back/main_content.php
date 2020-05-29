    <section class="content">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-primary elevation-1"><i class="fa fa-newspaper"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Ümumi Xəbər Sayı</span>
                <?php $news_count = news_count();?>
                <span class="info-box-number">
                  <?php echo $news_count;?>
                </span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-primary elevation-1"><i class="fa fa-edit"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Ümumi Köşə Yazarı</span>
                <?php $k_yazar_count = k_yazar_count();?>
                <span class="info-box-number">
                  <?php echo $k_yazar_count;?>
                </span>
              </div>
            </div>
          </div>

          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-primary elevation-1"><i class="fa fa-image"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Ümumi Reklam Sayı</span>
                <?php $reklam_count = reklam_count();?>
                <span class="info-box-number">
                  <?php echo $reklam_count;?>
                </span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-primary elevation-1"><i class="fab fa-edge"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Sosial Şəbəkələr</span>
                <?php $social_media_count = social_media_count();?>
                <span class="info-box-number">
                  <?php echo $social_media_count;?>
                </span>
              </div>
            </div>
          </div>
        </div>

         <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-primary elevation-1"><i class="fa fa-comment"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Təsdiqlənmiş Rəylər</span>
                <?php $tesdiqlenmis_rey_count = tesdiqlenmis_rey_count();?>
                <span class="info-box-number">
                  <?php echo $tesdiqlenmis_rey_count;?>
                </span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-primary elevation-1"><i class="fa fa-comment"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Təsdiqlənməmiş Rəylər</span>
                <?php $tesdiqlenmemis_rey_count = tesdiqlenmemis_rey_count();?>
                <span class="info-box-number">
                  <?php echo $tesdiqlenmemis_rey_count;?>
                </span>
              </div>
            </div>
          </div>

          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-primary elevation-1"><i class="fa fa-envelope"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Oxunmuş Mesaj Sayı</span>
                <?php $oxunmus_mesaj_count = oxunmus_mesaj_count();?>
                <span class="info-box-number">
                  <?php echo $oxunmus_mesaj_count;?>
                </span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-primary elevation-1"><i class="fa fa-envelope"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Oxunmamış Mesaj Sayı</span>
                <?php $oxunmamis_mesaj_count = oxunmamis_mesaj_count();?>
                <span class="info-box-number">
                  <?php echo $oxunmamis_mesaj_count;?>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="row" style="margin-top:20px;">
          <div class="col-md-12">
            <table id="example" class="table table-bordered table-responsive">
              <thead>
              <tr>
                <th style="text-align:center;">No</th>
                <th style="text-align:center;">Xəbərin Başlığı</th>
                <th style="text-align:center;">Xəbəri Oxu</th>
                <th style="text-align:center;">Yazılma Tarixi</th>
              </tr>
              </thead>
              <tbody>
              <?php $news1 = news1(); $num=1; foreach ($news1 as $info): ?>
                 <tr>
                  <td style="width:5%;text-align:center;"><?php echo $num++; ?></td>
                  <td style="width:65%;"><?php echo word_limiter($info['title'],9);?></td>
                  <td style="text-align:center;width:15%;">
                    <button class="btn btn-primary">
                      <a style="color:white;" href="<?=base_url('admin/news_details/'.$info['id'].'');?>">Xəbəri Oxu</a>
                    </button>
                  </td>
                  <td style="width:15%;text-align:center;"><?php echo $info['news_date'];?></td>
                </tr>
              <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </section>
