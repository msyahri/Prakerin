
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
  <h4>Edit Logo (300x80px)</h4>
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">

    <?php
    foreach ($logo as $s) { ?>

    <form action="<?php echo base_url(). 'administrator/setting/edit_aksi'; ?> " method="post" id="form-satuan" enctype="multipart/form-data">
        <table class="table table-striped ">
            <input type="hidden" name="id" class="form-control" value="<?php echo $s->id;?>">

        <tr>
                <td>Foto</td>
                <td><input type="file" class="form-control" name="filefoto" ></td>
                <input type="hidden" name="filelama" class="form-control" value="<?php echo $s->foto_logo;?>">

      </tr>
      <tr>
      <td></td>
      <td><img src="<?php echo base_url(). 'frontend/template/images/'?><?php echo $s->foto_logo?>" alt="" width="300"></td>
      </tr>
      
                <td>Keterangan</td>
                <td><textarea type="text" class="form-control" name="keterangan" required="required" value=""><?php echo $s->keterangan ?></textarea>
            </tr>
      
            
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-success" value="Edit">
        <button class="btn btn-danger" value=""><a href="<?php echo base_url(). 'administrator/setting/edit_logo/1'; ?>" style="color:white">Batal</a></button></td>

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


