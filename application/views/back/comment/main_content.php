 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <?php echo $this->session->flashdata('status');?>
          <div class="card">
            <div class="card-header">
              <p style="color:red;">Rəyləri oxumadan təsdiqləməyin..! Qaydalara zidd olan bir rəy varsa, ekran görüntüsünü qeyd edib, rəyi  <strong>Passiv</strong> vəziyyətə gətirin. Yenilə buttonuna klik edərək rəyi oxuya bilərsiniz</p>
            </div>
            <div class="card-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr class="text-center">
                  <th>No</th>
                  <th>Ad Soyad</th>
                  <th>Email</th>
                  <th>Tarix</th>
                  <th>Aktiv / Passiv</th>
                  <th>Əməliyyatlar</th>
                </tr>
                </thead>
                <tbody>
                   <?php $num = 1; foreach ($info as $info): ?>
                       <tr class="text-center">
                          <td><?= $num++;?></td>
                          <td><?= $info['fullname'];?></td>
                          <td><?= substr($info['email'], 0,20);?></td>
                          <td><?= $info['c_date'];?></td>
                          <td>
                            <input 
                                  class="toggle_check" 
                                  data-on="Aktiv" 
                                  data-onstyle="success"
                                  data-off="Passiv"
                                  data-offstyle="danger"
                                  type="checkbox"
                                  dataID="<?= $info['id'];?>"
                                  dataURL="<?= base_url('admin/comment_set');?>"
                                  <?= ($info['status']==1) ? 'checked' : ''; ?>>
                          </td>
                          <td>
                            <a href="<?=base_url('admin/comment_update/'.$info["id"].'');?>">
                              <button type="button" class="btn btn-success" name="button">Yenilə</button>
                            <a href="<?=base_url('admin/comment_delete/'.$info["id"].'/id/comment');?>">
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