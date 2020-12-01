<div class="row">

  <div class="col-md-3" style="background:rgb(88, 233, 58);margin-left:15px;height:100%">
<br><br>
      <center>
        <b>
        <span style=font-size:70px;><i class="glyphicon glyphicon-user"></i></span>
        <div style="color:white">
        <p style="font-size:15px;letter-spacing:-1px">SELAMAT DATANG <?php echo strtoupper($this->session->userdata('username')); ?></p>
        <hr>
        <a href="<?php echo site_url('Admin'); ?>" style="font-size:15px;letter-spacing:-1px;color:white">HOME</p>
        <hr>
      <div class="dropdown dropright" style="margin-left:80px">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color:white" >BUKU &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
        <div class="dropdown-menu" style="background:rgb(4, 162, 15)">
          <a class="dropdown-item" href="<?php echo site_url('Admin/lihatbuku');?>"style="color:white">LIHAT BUKU</a>
          <a class="dropdown-item" href="<?php echo site_url('Admin/tambahbuku');?>"style="color:white">TAMBAH BUKU</a>
        </div>
      </div>
        <hr>
        <div class="dropdown dropright" style="margin-left:80px">
          <a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color:white">DONATUR &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
          <div class="dropdown-menu" style="background:rgb(4, 162, 15)">
            <a class="dropdown-item" href="<?php echo site_url('Admin/lihatdonatur');?>"style="color:white">LIHAT DONATUR</a>
            <a class="dropdown-item" href="<?php echo site_url('Admin/tambahdonatur');?>"style="color:white">TAMBAH DONATUR</a>
          </div>
        </div>
        </div>
        <hr>
          <br><br><br><br><br><br><br><br><br><br><br>
  </div>
