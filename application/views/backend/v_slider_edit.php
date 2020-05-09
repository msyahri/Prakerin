
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
    foreach ($slider as $s) { ?>

    <form action="<?php echo base_url(). 'administrator/slider/edit_aksi'; ?> " method="post" id="form-satuan" enctype="multipart/form-data">
        <table class="table table-striped ">
      <input type="hidden" name="id" class="form-control" value="<?php echo $s->id;?>">
            <tr>

                <td>Nama</td>
                <td><input type="text" class="form-control" name="nama_slider" required="required" value="<?php echo $s->nama_slider ?>"></td>
            </tr>

                 <tr>
                <td>Foto</td>
                <td><input type="file" class="form-control" name="filefoto" height="50" ></td>
        <input type="hidden" name="filelama" class="form-control" value="<?php echo $s->foto_slider;?>">

      </tr>
      <tr>
      <td></td>
      <td><img src="<?php echo base_url(). 'frontend/template/images/'?><?php echo $s->foto_slider?>" alt="" width="300"></td>
      </tr>

      <tr>
                <td>Text</td>
                <td><input type="text" class="form-control" name="text_slider" required="required" value="<?php echo $s->text_slider ?>"></td>
            </tr>
                <td>Summary</td>
                <td><textarea type="text" class="form-control" name="summary" required="required" value=""><?php echo $s->summary ?></textarea>
            </tr>
      </tr>
                <td>Link</td>
                <td><textarea type="text" class="form-control" name="link_button" required="required" value=""><?php echo $s->link_button ?></textarea>
            </tr>             
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-success" value="Edit">
        <button class="btn btn-danger" value=""><a href="<?php echo base_url(). 'administrator/slider'; ?>" style="color:white">Batal</a></button></td>

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


