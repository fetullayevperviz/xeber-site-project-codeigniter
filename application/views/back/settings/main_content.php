 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <?php echo $this->session->flashdata('status');?>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Site Parametrləri Listi</h3>
            </div>
            
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr class="text-center">
                  <th>No</th>
                  <th>Başlıq</th>
                  <th>Url</th>
                  <th>Email</th>
                  <th>Telefon</th>
                  <th>Əməliyyatlar</th>
                </tr>
                </thead>
                <tbody>
                   <?php $num = 1; foreach ($info as $info): ?>
                       <tr class="text-center">
                          <td><?= $num++;?></td>
                          <td><?= $info['title'];?></td>
                          <td><?= $info['url'];?></td>
                          <td><?= $info['email'];?></td>
                          <td><?= $info['phone'];?></td>
                          <td>
                            <a href="<?=base_url('admin/settings_update/'.$info["id"].'');?>">
                              <button type="button" class="btn btn-primary" name="button">Yenilə</button>
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