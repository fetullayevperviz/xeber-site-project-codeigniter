 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <?php echo $this->session->flashdata('status');?>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Xəbərlər Listi</h3>
              <a href="<?=base_url('admin/news_add');?>" class="btn btn-primary float-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;Əlavə Et</a>
            </div>
            <div class="card-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr class="text-center">
                  <th>No</th>
                  <th>Başlıq</th>
                  <th>Kateqoriya</th>
                  <th>Aktiv / Passiv</th>
                  <th>Rəy izini</th>
                  <th>Başlıq Vəziyyəti</th>
                  <th>Əməliyyatlar</th>
                </tr>
                </thead>

                <tbody>
                   <?php $num = 1; foreach ($info as $info): ?>
                       <tr class="text-center">
                          <td style="width:5%;"><?= $num++;?></td>
                          <td style="width:25%;"><?= word_limiter($info['title'],3);?></td>
                          <td style="width:10%;"><?= $info['category'];?></td>
                          <td style="width:10%;">
                            <input 
                                  class="toggle_check" 
                                  data-on="Aktiv" 
                                  data-onstyle="success"
                                  data-off="Passiv"
                                  data-offstyle="danger"
                                  type="checkbox"
                                  dataID="<?= $info['id'];?>"
                                  dataURL="<?= base_url('admin/news_set');?>"
                                  <?= ($info['status']==1) ? 'checked' : ''; ?>>
                          </td>
                          <td style="width:15%;">
                            <?php if($info['com_status']==1){ ?>
                            <button class="btn btn-success">izin Var</button>
                            <?php } else{ ?>
                            <button class="btn btn-danger">izin Yoxdur</button>
                            <?php } ?>
                          </td>

                          <td style="width:15%;">
                            <?php if($info['last_minute']==1){ ?>
                            <button class="btn btn-success">Adi Xəbər</button>
                            <?php } else{ ?>
                            <button class="btn btn-danger">Son Dəqiqə</button>
                            <?php } ?>
                          </td>

                          <td style="width:20%;">
                            <a href="<?=base_url('admin/news_update/'.$info["id"].'');?>">
                              <button type="button" class="btn btn-success" name="button">Yenilə</button>
                            <a href="<?=base_url('admin/news_delete/'.$info["id"].'/id/news');?>">
                              <button type="button" class="btn btn-danger" name="button">Sil</button>
                            </a>
                          </td>
                      </tr>
                   <?php endforeach ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->