
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="<?php echo base_url().'frontend/admin/dist/img/user2-160x160.png';?>" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>M. Syahri</p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
 
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li><a href="<?php echo base_url().'administrator/home_admin';?>"><i class="fa fa-home"></i> <span>Home</span></a></li>

   
    <li class="treeview">
      <a href="<?php echo base_url().'administrator/slider';?>">
        <i class="fa fa-pie-chart"></i>
        <span>Slider</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url().'administrator/slider';?>"><i class="fa fa-circle-o"></i> Data Slider</a></li>
        <li><a href="<?php echo base_url().'administrator/slider/tambah';?>"><i class="fa fa-circle-o"></i> Tambah</a></li>
        </ul>
    </li>
    <li class="treeview">
      <a href="<?php echo base_url().'artikel';?>">
        <i class="fa fa-laptop"></i>
        <span>Artikel</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        
        <li><a href="<?php echo base_url().'administrator/artikel';?>"><i class="fa fa-circle-o"></i> Umum</a></li>
        <li><a href="<?php echo base_url().'administrator/artikel/kategori';?>"><i class="fa fa-circle-o"></i> Kategori</a></li>
        
      </ul>
    </li>
    <li class="treeview">
      <a href="<?php echo base_url().'administrator/informasi';?>">
        <i class="fa fa-edit"></i> <span>Informasi</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url().'administrator/profildesa';?>"><i class="fa fa-circle-o"></i> Profil Desa</a></li>
        <li><a href="<?php echo base_url().'administrator/sejarah';?>"><i class="fa fa-circle-o"></i> Sejarah Desa</a></li>
        <li><a href="<?php echo base_url().'administrator/kepaladesa';?>"><i class="fa fa-circle-o"></i> Kepala Desa</a></li>
        <li><a href="<?php echo base_url().'administrator/strukturorganisasi';?>"><i class="fa fa-circle-o"></i> Struktur Organisasi</a></li>
        <li><a href="<?php echo base_url().'administrator/peta';?>"><i class="fa fa-circle-o"></i> Peta Desa</a></li>
        <li><a href="<?php echo base_url().'administrator/kependudukan';?>"><i class="fa fa-circle-o"></i> Kependudukan</a></li>
        <li><a href="<?php echo base_url().'administrator/berita';?>"><i class="fa fa-circle-o"></i> Berita Desa</a></li>
      <!--  <li><a href="<?php echo base_url().'administrator/apbd';?>"><i class="fa fa-circle-o"></i> APBD </a></li> -->
      </ul>
    </li>
    <li class="treeview">
      <a href="<?php echo base_url().'administrator/galeri';?>">
        <i class="fa fa-photo"></i> <span>Galeri</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
      
        <li><a href="<?php echo base_url().'administrator/galeri';?>"><i class="fa fa-circle-o"></i> Data Galeri</a></li>
        <li><a href="<?php echo base_url().'administrator/galeri/tambah';?>"><i class="fa fa-circle-o"></i> Tambah Galeri</a></li>
        <li><a href="<?php echo base_url().'administrator/galeri/label';?>"><i class="fa fa-circle-o"></i> Kategori Galeri</a></li>
      </ul>
    </li>
    
    <li class="treeview">
      <a href="<?php echo base_url().'administrator/kontak';?>">
        <i class="fa fa-phone"></i> <span>Kontak</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url().'administrator/kontak';?>"><i class="fa fa-circle-o"></i>Data Kontak</a></li>
        <li><a href="<?php echo base_url().'administrator/kontak/info';?>"><i class="fa fa-circle-o"></i>Info</a></li>
        </ul>
    </li>
    
    <li class="treeview">
    <a href="#">
      <i class="fa fa-gear"></i> <span>Setting</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo base_url().'administrator/setting/logo';?>"><i class="fa fa-circle-o"></i> Logo</a></li>
      <li><a href="<?php echo base_url().'administrator/setting/admin';?>"><i class="fa fa-circle-o"></i> Administrator</a></li>
      </ul>
  </li>    
  </ul>
</section>
<!-- /.sidebar -->
</aside>