
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
    foreach ($struktur as $s) { ?>

    <form action="<?php echo base_url(). 'administrator/strukturorganisasi/edit_aksi'; ?> " method="post" id="form-satuan" enctype="multipart/form-data">
        <table class="table table-striped ">
      <input type="hidden" name="id" class="form-control" value="<?php echo $s->id;?>">
            
      <tr>
                <td>Nama</td>
                <td><input type="text" class="form-control" name="nama" required="required" value="<?php echo $s->nama ?>"></td>
            </tr>

            <tr>
                <td>Jenis Jabatan</td>
                <td><input type="text" class="form-control" name="jenis_jabatan" required="required" value="<?php echo $s->jenis_jabatan ?>"></td>
            </tr>

            <tr>
                <td>Keterangan Jabatan</td>
                <td><input type="text" class="form-control" name="keterangan_jabatan" value="<?php echo $s->keterangan_jabatan ?>"></td>
            </tr>

            <tr>
                <td>No Telp</td>
                <td><input type="text" class="form-control" name="no_telp" value="<?php echo $s->no_telp ?>"></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><input type="text" class="form-control" name="alamat" required="required" value="<?php echo $s->alamat ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-success" value="Edit">
        <button class="btn btn-danger" value=""><a href="<?php echo base_url(). 'administrator/strukturorganisasi'; ?>" style="color:white">Batal</a></button></td>

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


