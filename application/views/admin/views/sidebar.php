<ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('controler/home') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Input Data</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo base_url('Admin/form_produk_tani') ?>"><i class="fas fa-utensils"></i>&nbsp;Produk Tani</a>
            <a class="dropdown-item" href="<?php echo base_url('controler/form_makanan') ?>"><i class="fas fa-utensils"></i>&nbsp;Produk Olah</a>
            <a class="dropdown-item" href="<?php echo base_url('controler/form_minuman') ?>"><i class="fas fa-user-circle"></i>&nbsp;Anggota</a>
            <a class="dropdown-item" href="#"><i class="fas fa-newspaper"></i>&nbsp; Input Kegiatan</a>
        </div>
        </li>
           <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Admin/Grafik') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Grafik Produksi</span>
          </a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-archive"></i>
            <span>Tabel</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="index.php?halaman=tbmakanan"><i class="fa fa-utensils"></i> Produk Tani</a>
                 <a class="dropdown-item" href="index.php?halaman=tbminuman"><i class="fa fa-coffee"></i> Produk Olahan</a>
                 <a class="dropdown-item" href="index.php?halaman=tbminuman"><i class="fas fa-user-circle"></i> Tabel Anggota</a>
          </div>
        </li>
      </ul>