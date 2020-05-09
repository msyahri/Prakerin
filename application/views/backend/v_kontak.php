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
    <h2> DATA KONTAK </h2>
    BERIKUT DAFTAR ORANG YANG MENGIRIMKAN PESAN DARI HALAMAN KONTAK
    <hr>
    <thead>
      <tr>
        <th>No</th>
        <th>NAMA</th>
        <th><center>EMAIL</center></th>
        <th>NO. TELP</th>
        <th>WEBSITE</th>
        <th>ALAMAT</th>
        <th>PESAN</th>
        <th>AKSI</th>
      </tr>
    </thead>
    <tbody>
      <?php
  $no = 1;
  foreach($kontak as $s){
  ?>
  <tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $s->nama ?></td>
    <td><?php echo $s->email ?></td>
    <td><?php echo $s->no_telp ?></td>
    <td><?php echo $s->website ?></td>
    <td><?php echo $s->alamat ?></td>
    <td><?php echo $s->pesan ?></td>
    <td>
      <a href="<?php echo base_url(). 'administrator/kontak/hapus/'.$s->id; ?>"><button class="btn btn-danger">Hapus Pesan</button></a>
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