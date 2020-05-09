<div class="content-wrapper" >
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
      
    <table class="table table-striped table-bordered data display nowrap" id="data">
    <h2> DATA STRUKTUR</h2>
    <a href="<?php echo base_url(). 'administrator/strukturorganisasi/tambah/';?>"><button class="btn btn-warning">Tambah Struktur Data</button></a>
    <hr>
    <thead>
      <tr>
        <th>No</th>
        <th>NAMA</th>
        <th>JENIS JABATAN</th>
        <th>KETERANGAN JABATAN</th>
        <th>NO TELP</th>
        <th>ALAMAT</th>
        <th>AKSI</th>
      </tr>
    </thead>
    <tbody>
      <?php
  $no = 1;
  foreach($struktur as $s){
  ?>
  <tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $s->nama ?></td>
    <td><?php echo $s->jenis_jabatan ?></td>
    <td><?php echo $s->keterangan_jabatan ?></td>
    <td><?php echo $s->no_telp ?></td>
    <td><?php echo $s->alamat ?></td>
    <td>
      <a href="<?php echo base_url(). 'administrator/strukturorganisasi/edit/'.$s->id; ?>"><button class="btn btn-primary">Edit</button></a>
      <a href="<?php echo base_url(). 'administrator/strukturorganisasi/hapus/'.$s->id; ?>"><button class="btn btn-danger">Hapus</button></a>
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