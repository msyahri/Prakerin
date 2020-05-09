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
    <h2> DATA SLIDER </h2>
    
    <a href="<?php echo base_url(). 'administrator/slider/tambah/';?>"><button class="btn btn-warning">Tambah Slider</button></a>
    <hr>
    <thead>
      <tr>
        <th>No</th>
        <th>FOTO</th>
        <th>NAMA</th>
        <th>TEXT</th>
        <th>SUMMARY</th>
        <th>LINK</th>
        <th>AKSI</th>
      </tr>
    </thead>
    <tbody>
      <?php
  $no = 1;
  foreach($slider as $s){
  ?>
  <tr>
    <td><?php echo $no++ ?></td>
    <td><img src="<?php echo base_url(). 'frontend/template/images/'?><?php echo $s->foto_slider ?>" width='100' height='60'></td>
    <td><?php echo $s->nama_slider ?></td>
    <td><?php echo $s->text_slider ?></td>
    <td><?php echo $s->summary ?></td>
    <td><?php echo $s->link_button ?></td>
    <td>
    <a href="<?php echo base_url(). 'administrator/slider/edit/'.$s->id; ?>"><button class="btn btn-primary">Edit</button></a>
    <a href="<?php echo base_url(). 'administrator/slider/hapus/'.$s->id; ?>"><button class="btn btn-danger">Hapus</button></a>
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