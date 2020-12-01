<?php
  error_reporting(0);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>My Library | Home</title>
  <script src ="<?php echo base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/glyphicon.css')?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
  <script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.minn.css">
   <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
</head>
<body>

<div class="container">
  <nav class="navbar navbar-expand-sm bg-success navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a style="font-family:serif" class="nav-link" href="<?php echo base_url(); ?>">MY LIBRARY</a>
      </li>
  </ul>
  <ul class="navbar-nav ml-auto">
  <li class="dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#>">Login</a>
    <span class="caret"></span></a>
    <ul class="dropdown-menu" style="background:rgb(23, 135, 0);">
      <li><a style="color:white "href="<?php echo base_url('?halaman=loginadmin'); ?>">Admin</a></li>
      <li><a style="color:white "href="<?php echo base_url('?halaman=loginuser'); ?>">User</a></li>
    </ul>
</li>
   <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('?halaman=registeruser'); ?>" >Register</a>
    </li>
  </uL>
  </nav>
  <?php if(isset($_GET['info'])) {?>
    <br>
  <!-- START informasi -->
  	  <b><center><span><i class="glyphicon glyphicon-ok"></i> <?php echo $_GET['info']; ?></span></center></b>
  <!-- END informasi -->
  <?php }
    else if (isset($_GET['notif'])) {?>
        <br>
        	  <b><center><span><i class="glyphicon glyphicon-info-sign"></i> <?php echo $_GET['notif']; ?></span></center></b>
  <?php } ?>
  <br><br>
  <!-- The slideshow -->
  <?php form_error('username'); ?>
  <div class="carousel-inner">

        <div style="background-image:url('<?php echo base_url('assets/picture/library.jpg')?>');width:1099px;height:428px">
          <center>
          <br><br>
          <span style="color: White;font-family:serif;font-size:100px;color:rgb(89, 40, 0);background:rgb(210, 197, 212)">MY LIBRARY</p>
          <b><p style="background:#1fbf43!important;border-radius:10px;padding:5px;margin:100px 30% 0 30%;font-size:20px">
            DATANG BACA BUKU, PULANG BAWA ILMU</p></b>
          </center>
        </div>
    </div>
    <br><br><br>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="border:3px solid #21de4c;padding:50px;background:rgb(23, 135, 0);color:white">
<?php
if (isset($_GET['halaman']))
  {
    ?>

    <?php
      if ($_GET['halaman']=="registeruser")
      {
        include 'registeruser.php';
      }
      else if ($_GET['halaman']=="loginuser")
      {
        include 'loginuser.php';
      }
    else if ($_GET['halaman']=="loginadmin")
    {
        include 'loginadmin.php';
    }
  }
  ?>
