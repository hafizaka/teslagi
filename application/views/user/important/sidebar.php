<div class="row">

  <div class="col-md-3" style="background:rgb(88, 233, 58);margin-left:15px;height:100%">
<br><br>
      <center>
        <b>
        <span style=font-size:70px;><i class="glyphicon glyphicon-user"></i></span>
        <div style="color:white">
        <p style="font-size:15px;letter-spacing:-1px">SELAMAT DATANG <?php echo strtoupper($this->session->userdata('username')); ?></p>
        <hr>
        <a href="<?php echo site_url('User'); ?>" style="font-size:15px;letter-spacing:-1px;color:white">HOME</p>
        <hr>
          <a href="<?php echo site_url('User/daftarbuku'); ?>"style="color:white">DAFTAR BUKU</a>
        </div>
        <hr>
          <br><br><br><br><br><br><br><br><br><br><br>
  </div>
