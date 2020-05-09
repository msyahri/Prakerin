
<?php
$stat=isset($_GET['stat'])?$_GET['stat']:"";
$pesan=isset($_GET['pesan'])?$_GET['pesan']:"";
?>
<!DOCTYPE html>
<html >
<head>
  <style>
  </style>
  <meta charset="UTF-8">
  <title>Halaman Login</title>
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="<?php echo base_url().'frontend/login/css/style.css'; ?>">
</head>
<body>
<div class="login-form">
<form action="<?php echo base_url('administrator/login/aksi_login'); ?>" method="post">
 <center><img src="<?php  echo base_url('login.png'); ?>" width="150" height="150"></center>
 <h1>Desa Pancasan</h1>
 <div class="form-group ">
   <input type="text" class="form-control" name="username" placeholder="Nama Pengguna" id="UserName">
   <i class="fa fa-user"></i>
 </div>
 <div class="form-group log-status">
   <input type="password" class="form-control" name="password" placeholder="Kata Sandi" id="Password">
   <i class="fa fa-lock"></i>
 </div>
 <?php
 if ($stat!="") {
    echo "<div class='form-group'>";
    if ($stat=='0'){
      echo "<div class='danger'>";
      echo $pesan;
      echo "</div>";
     }else if ($stat=='1') {
      echo "<div class='success'>";
      echo $pesan;
      echo "</div>";
    }
    echo "</div>";
  }
 ?>

 <input type="submit" value="Masuk" class="log-btn" >


</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="<?php base_url() ?>assets/bootstrap/js/login.js"></script>
</form>

</body>
</html>

