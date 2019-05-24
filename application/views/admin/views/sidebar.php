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
            <a class="dropdown-item" href="<?php echo base_url('controler/form_makanan') ?>"><i class="fas fa-utensils"></i>&nbsp;Input Makanan</a>
            <a class="dropdown-item" href="<?php echo base_url('controler/form_minuman') ?>"><i class="fas fa-coffee"></i>&nbsp;Input Minuman</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="index.php?halaman=tempat"><i class="fas fa-map-marked-alt"></i>&nbsp;Input Tempat</a>
            <a class="dropdown-item" href="#"><i class="fas fa-newspaper"></i>&nbsp; Input Berita</a>
        </div>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="<?php echo base_url('controler/') ?>">
            <i class="fa fa-calculator t"></i>
            <span>Kasir</span>
          </a>
        </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-file-export"></i>
            <span>Data</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="index.php?halaman=backup"><i class="fas fa-file-upload"></i>&nbsp;Backup Data</a>
            <a class="dropdown-item" href="index.php?halaman=restore"><i class="fas fa-file-export"></i>&nbsp;Restore Data</a>
          </div>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-archive"></i>
            <span>Tabel</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="index.php?halaman=tbmakanan"><i class="fa fa-utensils"></i> Tabel Makanan</a>
       
          
            <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="index.php?halaman=tbminuman"><i class="fa fa-coffee"></i> Tabel Minuman</a>
          </div>
        </li>
      </ul>