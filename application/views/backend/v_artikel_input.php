
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

      <form action="<?php echo base_url(). 'administrator/artikel/tambah_aksi'; ?> " method="post"  enctype="multipart/form-data">
  		<table class="table table-striped col-md-6">
            <tr>
                <?php $today = date("d-m-y    H:m:s");  ?>
                <td>Tanggal Posting</td>
                <td><input type="datetime" name="tanggal_posting" class="form-control" value="<?php echo $today; ?>"></td>
            </tr>
             
  		    <tr>
  				<td>Judul</td>
  				<td><input type="text" class="form-control" name="judul_artikel" required="required" value=""></td>
             </tr>
            <tr>
  				<td>Foto</td>
  				<td><input type="file" class="form-control" name="filefoto" required="required" value=""></td>
  		    </tr>
  		    <tr>
  				<td>Summaries</td>
  				<td><input type="text" class="form-control" name="summary" required="required"></td>
  		    </tr>
        
            <tr>
  				<td>Isi Berita</td>
  				<td><textarea type="text" class="form-control" name="isi_artikel" required="required"></textarea></td>
              </tr>
              
              <tr>
  				<td>Kategori</td>
  				<td><select class="form-control" name="id_kategori_artikel" id="id_kategori_artikel" required="">
                    <option value="">Pilih</option>
                    <?php foreach($kategori as $row) { ?>
                    <option value="<?php echo $row->id; ?>" ><?php echo $row->nama_kategori;?></option>
                    <?php } ?>
                    </select>
                </td>
  		    </tr>
            

  		    <tr>
  				<td><input type="submit" class="btn btn-success" value="Tambah">
                <button class="btn btn-danger" value=""><a href="<?php echo base_url(). 'administrator/artikel'; ?>" style="color:white">Batal</a></button></td>
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


