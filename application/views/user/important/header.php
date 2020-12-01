<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>My Library | Home</title>
  <script src ="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/glyphicon.css')?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
   <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
   <style type="text/css">
     hr{
       background: white;
     }
   </style>
</head>
<body>

<div class="container">
  <nav class="navbar navbar-expand-sm bg-success navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <span style="font-family:serif"><a class="nav-link" href="<?php echo base_url(); ?>">My Library</a></span>
      </li>
  </ul>
  <ul class="navbar-nav ml-auto">
   <li class="nav-item">
         <a class="nav-link" href="<?php echo site_url('user/logout'); ?>" >Logout</a>
    </li>
  </uL>
  </nav>
