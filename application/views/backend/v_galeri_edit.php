
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

    <?php
    foreach ($galeri as $s) { ?>

    <form action="<?php echo base_url(). 'administrator/galeri/edit_aksi'; ?> " method="post" id="form-satuan" enctype="multipart/form-data">
        <table class="table table-striped ">
      <input type="hidden" name="id" class="form-control" value="<?php echo $s->id;?>">
            
          <tr>
                <td>Nama Galeri</td>
                <td><input type="text" class="form-control" name="nama_galeri" required="required" value="<?php echo $s->nama_galeri ?>"></td>
            </tr>


      <tr>
                <td>Foto</td>
                <td><input type="file" class="form-control" name="filefoto" ></td>
        <input type="hidden" name="filelama" class="form-control" value="<?php echo $s->foto_galeri;?>">

      </tr>
      <tr>
      <td></td>
      <td><img src="<?php echo base_url(). 'frontend/template/images/'?><?php echo $s->foto_galeri?>" alt="" width="300"></td>
      </tr>
      
      <tr>
                <td>Keterangan</td>
                <td><textarea type="text" class="form-control" name="keterangan" required="required" value=""><?php echo $s->keterangan ?></textarea>
            </tr>
      
                <td>Kategori</td>
                <td><select class="form-control" name="id_kategori_galeri">
          <option value="">Pilih</option>
            <?php foreach($kategori as $row) {
                if($row->id == $s->id_kategori_galeri){ ?>
                <option value="<?php echo $row->id; ?>" selected=selected ><?php echo $row->id.'-'.$row->nama_kategori;?></option>
                <?php

                }else{
                  ?>
                <option value="<?php echo $row->id; ?>" ><?php echo $row->id.'-'.$row->nama_kategori;?></option>
            <?php }} ?>
        </select>
        </td>
            
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-success" value="Edit">
        <button class="btn btn-danger" value=""><a href="<?php echo base_url(). 'administrator/galeri'; ?>" style="color:white">Batal</a></button></td>

            </tr>
      <?php } ?>
        </table>

    </form>


   </section>
    <!-- right col -->
  </div>
  <!-- /.row (main row) -->

</section>
<!-- /.content -->
</div>


