
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

      <form action="<?php echo base_url(). 'administrator/slider/tambah_aksi'; ?> " method="post"  enctype="multipart/form-data">
  		<table class="table table-striped col-md-6">
             
  		    <tr>
  				<td>Nama</td>
  				<td><input type="text" class="form-control" name="nama_slider" required="required" value=""></td>
             </tr>
            <tr>
  				<td>Foto</td>
  				<td><input type="file" class="form-control" name="filefoto" required="required" value=""></td>
  		    </tr>
  		    <tr>
  				<td>Text</td>
  				<td><input type="text" class="form-control" name="text_slider" required="required"></td>
  		    </tr>
        
            <tr>
  				<td>Summary</td>
  				<td><textarea type="text" class="form-control" name="summary" required="required"></textarea></td>
              </tr>
         <tr>
  				<td>Link</td>
  				<td><textarea type="text" class="form-control" name="link_button" required="required"></textarea></td>
              </tr>
            

  		    <tr>
  				<td><input type="submit" class="btn btn-success" value="Tambah">
                <button class="btn btn-danger" value="<a href="<?php echo base_url(). 'administrator/slider'; ?>" style="color:white">Batal</a></button></td>
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


