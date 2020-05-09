
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
    foreach ($kepaladesa as $s) { ?>

    <form action="<?php echo base_url(). 'administrator/kepaladesa/edit_aksi'; ?> " method="post" id="form-satuan" enctype="multipart/form-data">
        <table class="table table-striped ">
      <input type="hidden" name="id" class="form-control" value="<?php echo $s->id;?>">
            <tr>

                <td>Nama</td>
                <td><input type="text" class="form-control" name="nama" required="required" value="<?php echo $s->nama ?>"></td>
            </tr>

                 <tr>
                <td>Foto</td>
                <td><input type="file" class="form-control" name="filefoto" height="50" ></td>
        <input type="hidden" name="filelama" class="form-control" value="<?php echo $s->foto;?>">

      </tr>
      <tr>
      <td></td>
      <td><img src="<?php echo base_url(). 'frontend/template/images/'?><?php echo $s->foto?>" alt="" width="300"></td>
      </tr>

      <tr>
                <td>Pendidikan</td>
                <td><input type="text" class="form-control" name="pendidikan" required="required" value="<?php echo $s->pendidikan ?>"></td>
            </tr>
                <td>Keterangan</td>
                <td><textarea type="text" class="form-control" name="keterangan_jabatan" required="required" value=""><?php echo $s->keterangan_jabatan ?></textarea>
            </tr>           
            <tr>
                        </tr>
                <td>No. Telp.</td>
                <td><textarea type="text" class="form-control" name="no_telp" required="required" value=""><?php echo $s->no_telp ?></textarea>
            </tr>           
            <tr>
                        </tr>
                <td>Alamat</td>
                <td><textarea type="text" class="form-control" name="alamat" required="required" value=""><?php echo $s->alamat ?></textarea>
            </tr>           
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-success" value="Edit">
        <button class="btn btn-danger" value=""><a href="<?php echo base_url(). 'administrator/kepaladesa'; ?>" style="color:white">Batal</a></button></td>

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


