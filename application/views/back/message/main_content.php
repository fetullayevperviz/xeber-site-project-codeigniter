 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <?php echo $this->session->flashdata('status');?>
          <div class="card">
            <div class="card-header">
              <h3>Mesaj Listi</h3>
            </div>
            <div class="card-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr class="text-center">
                  <th>No</th>
                  <th>Ad Soyad</th>
                  <th>Email</th>
                  <th>Tarix</th>
                  <th>Mesajı Oxu</th>
                  <th>Əməliyyatlar</th>
                </tr>
                </thead>
                <tbody>
                   <?php $num = 1; foreach ($info as $info): ?>
                       <tr class="text-center">
                          <td><?= $num++;?></td>
                          <td><?= $info['fullname'];?></td>
                          <td><?= substr($info['email'], 0,20);?></td>
                          <td><?= $info['m_date'];?></td>
                          <td>
                            <?php if($info['status']==1){ ?>
                              <a class="btn btn-success" style='color:white;'>Oxundu</a>
                            <?php } else { ?>
                              <a class="btn btn-danger" style='color:white;'>Oxunmadı</a>
                            <?php } ?>
                          </td>
                          <td>
                            <a href="<?=base_url('admin/message_read/'.$info["id"].'');?>">
                              <button type="button" class="btn btn-success" name="button">Mesajı Oxu</button>
                            <a href="<?=base_url('admin/message_delete/'.$info["id"].'/id/message');?>">
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