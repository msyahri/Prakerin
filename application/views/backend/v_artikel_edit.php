
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
    foreach ($artikel as $s) { ?>

    <form action="<?php echo base_url(). 'administrator/artikel/edit_aksi'; ?> " method="post" id="form-satuan" enctype="multipart/form-data">
        <table class="table table-striped ">
      <input type="hidden" name="id" class="form-control" value="<?php echo $s->id;?>">
            <tr>

                <td>Tanggal</td>
                <td><input type="datetime" class="form-control" name="tanggal_posting" required="required" value="<?php echo $s->tanggal_posting ?>"></td>
            </tr>
      <tr>
                <td>Judul</td>
                <td><input type="text" class="form-control" name="judul_artikel" required="required" value="<?php echo $s->judul_artikel ?>"></td>
            </tr>


      <tr>
                <td>Foto</td>
                <td><input type="file" class="form-control" name="filefoto" height="50" ></td>
        <input type="hidden" name="filelama" class="form-control" value="<?php echo $s->foto_artikel;?>">

      </tr>
      <tr>
      <td></td>
      <td><img src="<?php echo base_url(). 'frontend/template/images/'?><?php echo $s->foto_artikel?>" alt="" width="300"></td>
      </tr>
      <tr>
                <td>Summaries</td>
                <td><input type="text" class="form-control" name="summary" required="required" value="<?php echo $s->summary ?>"></td>
            </tr>
      <tr>
                <td>Isi Berita</td>
                <td><textarea type="text" class="form-control" name="isi_artikel" required="required" value=""><?php echo $s->isi_artikel ?></textarea>
            </tr>
      
                <td>Kategori</td>
                <td><select class="form-control" name="id_kategori_artikel">
          <option value="">Pilih</option>
            <?php foreach($kategori as $row) {
                if($row->id == $s->id_kategori_artikel){ ?>
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
        <button class="btn btn-danger" value=""><a href="<?php echo base_url(). 'admin/slider'; ?>" style="color:white">Batal</a></button></td>

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


