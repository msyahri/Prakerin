
<div class="content-wrapper" >
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url().'administrator/home_admin';?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>8.212 +</h3>

          <p>Penduduk</p>
        </div>
        <div class="icon">
          <i class="ion ion-android-people"></i>
        </div>
        <a class="small-box-footer">Penduduk di Desa Pancasan</a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>2.183<sup style="font-size: 20px"></sup></h3>

          <p>Kepala Keluarga</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a class="small-box-footer">Kepala Keluarga di Desa Pancasan</a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>197,78</h3>

          <p>Hektar</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a class="small-box-footer">Luas Wilayah Desa Pancasan</a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>12</h3>

          <p>Perangkat Desa</p>
        </div>
        <div class="icon">
          <i class="ion ion-android-person"></i>
        </div>
        <a href="strukturorganisasi" class="small-box-footer">Info Lengkap <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
      
    <table class="table table-striped table-bordered data display nowrap" id="data">
    <h2> DATA ARTIKEL </h2>
    <a href="<?php echo base_url(). 'administrator/artikel/tambah/';?>"><button class="btn btn-warning">Tambah Artikel</button></a>
    <hr>
    <thead>
      <tr>
        <th>No</th>
        <th>FOTO</th>
        <th>JUDUL</th>
        <th>KATEGORI</th>
        <th>SUMMARY</th>
        <th>AKSI</th>
      </tr>
    </thead>
    <tbody>
      <?php
  $no = 1;
  foreach($artikel as $s){
  ?>
  <tr>
    <td><?php echo $no++ ?></td>
    <td><img src="<?php echo base_url(). 'frontend/template/images/'?><?php echo $s->foto_artikel ?>" width='60' height='60'></td>
    <td><?php echo $s->judul_artikel ?></td>
    <td><?php echo $s->nama_kategori ?></td>
    <td><?php echo $s->summary ?></td>
    <td>
      <a href="<?php echo base_url(). 'administrator/artikel/edit/'.$s->id; ?>"><button class="btn btn-primary">Edit</button></a>
      <a href="<?php echo base_url(). 'administrator/artikel/hapus/'.$s->id; ?>"><button class="btn btn-danger">Hapus</button></a>
    </td>
  </tr>
  <?php } ?>
    </tbody>
  </table>
 
  
 
    </section>
    <!-- right col -->
  </div>
  <!-- /.row (main row) -->

</section>
<!-- /.content -->
</div>
<script type="text/javascript">
    jQuery.noConflict();
    jQuery(document).ready(function($){
      $('.data').DataTable(
        {
          "scrollX": true
        }
      );
  
    });
  </script>
