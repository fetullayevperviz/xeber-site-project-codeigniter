<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url('admin');?>" class="brand-link">
      <img src="<?= base_url('assets/back/');?>dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Xeber Site Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/back/');?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?=base_url('admin');?>" class="d-block">Administrator</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="<?=base_url('admin');?>" class="nav-link active">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Ana Səhifə
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-cog"></i>
              <p>
                Ümumi Parametrlər
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/settings');?>" class="nav-link">
                  <p>Site Parametrləri</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/social_media');?>" class="nav-link">
                  <p>Sosial Media Parametrləri</p>
                </a>
              </li>   
            </ul>
          </li>

         <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-indent"></i>
              <p>
                Kateqoriyalar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/categories');?>" class="nav-link">
                  <p>Kateqoriya Listi</p>
                </a>
              </li>
            </ul>
          </li>

           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-newspaper"></i>
              <p>
                Xəbərlər
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('admin/news');?>" class="nav-link">
                  <p>Xəbər Listi</p>
                </a>
              </li>
            </ul>
          </li>

           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Köşə Yazarları
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('admin/k_yazar');?>" class="nav-link">
                  <p>Köşə Yazarları Listi</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a class="nav-link">
              <i class="nav-icon fa fa-envelope"></i>
              <p>
                Mesajlar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('admin/message');?>" class="nav-link">
                  <p>Mesaj Listi</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-comment"></i>
              <p>
                Rəylər
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('admin/comment');?>" class="nav-link">
                  <p>Rəylər</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-image"></i>
              <p>
                Reklamlar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('admin/reklam');?>" class="nav-link">
                  <p>Reklam</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="<?=base_url();?>" class="nav-link" target="_blank">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p class="text">Sayta Get</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('admin/logout');?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p class="text">Çıxış</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>