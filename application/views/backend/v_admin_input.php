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
  <h4>Tambah Admin</h4>
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">



    <form action="<?php echo base_url(). 'administrator/setting/admin_tambah_aksi'; ?> " method="post" id="form-satuan" enctype="multipart/form-data">
        <table class="table table-striped ">
            <input type="hidden" name="id" class="form-control" value="">
      
                <td>Username</td>
                <td><input type="text" class="form-control" name="username" required="required" placeholder="Nama pengguna untuk Login" value=""></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" class="form-control" name="email" required="required" placeholder="Email Anda"value=""></td>
            </tr>
                        <tr>
                <td>Password</td>
                <td><input type="text" class="form-control" name="password" required="required" placeholder="Gunakanlah Password Rumit" value=""></td>
            </tr>
            <tr>
             <input type="hidden" name="id_level" class="form-control" value="1">
             </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-success" value="Tambah">
        <button class="btn btn-danger" value=""><a href="<?php echo base_url(). 'administrator/setting/admin'; ?>" style="color:white">Batal</a></button></td>

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


