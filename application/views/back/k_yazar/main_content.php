 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <?php echo $this->session->flashdata('status');?>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Köşə Yazarları</h3>
              <a href="<?=base_url('admin/k_yazar_add');?>" class="btn btn-primary float-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;Əlavə Et</a>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr class="text-center">
                  <th>No</th>
                  <th>Yazarın Şəkili</th>
                  <th>Ad Soyad</th>
                  <th>Aktiv / Passiv</th>
                  <th>Əməliyyatlar</th>
                </tr>
                </thead>
                <tbody>
                   <?php $num = 1; foreach ($info as $info): ?>
                       <tr class="text-center">
                          <td><?= $num++;?></td>
                          <td><img src="<?php echo base_url(); echo $info['mini']; ?>" class="profile-user-img img-fluid"></td>
                          <td><?= $info['fullname'];?></td>
                          <td>
                            <input 
                                  class="toggle_check" 
                                  data-on="Aktiv" 
                                  data-onstyle="success"
                                  data-off="Passiv"
                                  data-offstyle="danger"
                                  type="checkbox"
                                  dataID="<?= $info['id'];?>"
                                  dataURL="<?= base_url('admin/k_yazar_set');?>"
                                  <?= ($info['status']==1) ? 'checked' : ''; ?>>
                          </td>
                          <td>
                            <a href="<?=base_url('admin/k_yazar_update/'.$info["id"].'');?>">
                              <button type="button" class="btn btn-success" name="button">Yenilə</button>
                            <a href="<?=base_url('admin/k_yazar_delete/'.$info["id"].'/id/k_yazar');?>">
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