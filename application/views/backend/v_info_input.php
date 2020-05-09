s
<div class="content-wrapper">
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

      <form action="<?php echo base_url(). 'administrator/kontak/info_tambah_aksi'; ?> " method="post"  enctype="multipart/form-data">
  		<table class="table table-striped col-md-6">
           
             
  		    <tr>
  				<td>Telp.</td>
  				<td><input type="text" class="form-control" name="telp" required="required" value=""</td>
             </tr>
            <tr>
  				<td>Email</td>
  				<td><input type="email" class="form-control" name="email" required="required" value=""></td>
              </tr>
              <tr>
              <?php $today = date("d-M-Y");  ?>
  				<td>Terakhir Diperbarui</td>
  				<td><input type="datetime" name="last" class="form-control" value="<?php echo $today; ?>"></td>
  		    </tr>
  
  		    <tr>
  				<td><input type="submit" class="btn btn-success" value="Tambah">
                <button class="btn btn-danger" value=""><a href="<?php echo base_url(). 'administrator/kontak/info'; ?>" style="color:white">Batal</a></button></td>
  		    </tr>
  		</table>

  	</form>


   </section>
    <!-- right col -->
  </div>
  <!-- /.row (main row) -->

</section>
<!-- /.content -->
</div>


