
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

      <form action="<?php echo base_url(). 'administrator/galeri/tambah_aksi'; ?> " method="post"  enctype="multipart/form-data">
  		<table class="table table-striped col-md-6">
            
             
  		    <tr>
  				<td>Nama Galeri</td>
  				<td><input type="text" class="form-control" name="nama_galeri" required="required" value=""></td>
             </tr>
            <tr>
  				<td>Foto</td>
  				<td><input type="file" class="form-control" name="filefoto" required="required" value=""></td>
  		    </tr>
            <tr>
  				<td>Keterangan</td>
  				<td><textarea type="text" class="form-control" name="keterangan" required="required"></textarea></td>
              </tr>
              
              <tr>
  				<td>Kategori</td>
  				<td><select class="form-control" name="id_kategori_galeri" id="id_kategori_galeri" required="">
                    <option value="">Pilih</option>
                    <?php foreach($kategori as $row) { ?>
                    <option value="<?php echo $row->id; ?>" ><?php echo $row->nama_kategori;?></option>
                    <?php } ?>
                    </select>
                </td>
  		    </tr>
            

  		    <tr>
  				<td><input type="submit" class="btn btn-success" value="Tambah">
                <button class="btn btn-danger" value=""><a href="<?php echo base_url(). 'administrator/galeri'; ?>" style="color:white">Batal</a></button></td>
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


