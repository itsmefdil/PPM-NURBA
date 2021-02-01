  
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?= base_url('uploads/pengguna/')?><?= $this->session->userdata('foto')?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?= $this->session->userdata('nama')?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="<?= base_url('admin')?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pencil-square-o"></i>
                <span>Blog</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= base_url('admin/blog')?>"><i class="fa fa-circle-o"></i> Artikel</a></li>
                <li><a href="<?= base_url('admin/kategori')?>"><i class="fa fa-circle-o"></i> Kategori</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-desktop"></i>
                <span>Galery</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= base_url('admin/foto')?>"><i class="fa fa-circle-o"></i> Foto</a></li>
                <li><a href="<?= base_url('admin/video')?>"><i class="fa fa-circle-o"></i> Video</a></li>
              </ul>
						</li>
						<li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Pondok</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
							<li><a href="<?= base_url('admin/ustadz')?>"><i class="fa fa-circle-o"></i> Ustadz</a></li>
							<li><a href="<?= base_url('admin/santri')?>"><i class="fa fa-circle-o"></i> Santri</a></li>
                <li><a href="<?= base_url('admin/pengurus')?>"><i class="fa fa-circle-o"></i> Pengurus</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-info-circle"></i>
                <span>Tentang</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= base_url('admin/sejarah')?>"><i class="fa fa-circle-o"></i> Sejarah</a></li>
                <li><a href="<?= base_url('admin/kontak')?>"><i class="fa fa-circle-o"></i> Kontak</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cloud"></i>
                <span>Website</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= base_url('admin/setting')?>"><i class="fa fa-circle-o"></i> Setting</a></li>
                <li><a href="<?= base_url('admin/slider')?>"><i class="fa fa-circle-o"></i> Slider</a></li>
                <li><a href="<?= base_url('admin/sosmed')?>"><i class="fa fa-circle-o"></i> Sosmed</a></li>
                <li><a href="<?= base_url('admin/pengguna')?>"><i class="fa fa-circle-o"></i> Pengguna</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="<?= base_url('admin/profile')?>">
                <i class="fa fa-user"></i> <span>Profile</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?= base_url('admin/logout')?>">
                <i class="fa fa-sign-out"></i> <span>Logout</span>
              </a>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
