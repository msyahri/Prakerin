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
    <h2>ADMINISTRATOR </h2>
    <a href="<?php echo base_url(). '';?>"><button class="btn btn-primary">Lihat Website</button></a>&nbsp;
    <a href="<?php echo base_url(). 'administrator/home_admin/logout';?>"><button class="btn btn-danger">Keluar</button></a>
    <hr>
    <thead>
      <tr>
        <th>No</th>
        <th><center>USERNAME</center></th>
        <th><center> EMAIL</center></th>
      </tr>
    </thead>
    <tbody>
      <?php
  $no = 1;
  foreach($admin as $s){
  ?>
  <tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $s->username ?></td>
    <td><?php echo $s->email ?></td>
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