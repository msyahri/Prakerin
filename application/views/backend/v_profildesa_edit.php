
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
    foreach ($profildesa as $s) { ?>

    <form action="<?php echo base_url(). 'administrator/profildesa/edit_aksi'; ?> " method="post" id="form-satuan" enctype="multipart/form-data">
        <table class="table table-striped ">
      <input type="hidden" name="id" class="form-control" value="<?php echo $s->id;?>">
            <tr>

                <td>Judul</td>
                <td><input type="text" class="form-control" name="judul" required="required" value="<?php echo $s->judul ?>"></td>
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
                <td>Isi</td>
                <td><textarea type="text" class="form-control" name="isi" required="required" value=""><?php echo $s->isi ?></textarea>
            </tr>           
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-success" value="Edit">
        <button class="btn btn-danger" value=""><a href="<?php echo base_url(). 'administrator/profildesa'; ?>" style="color:white">Batal</a></button></td>

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


