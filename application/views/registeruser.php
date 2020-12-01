<center><h2>REGISTER USER</h2></center><br>

<form method="post" action="<?php echo site_url('home/registeruser'); ?>">
  <div class="form-group">
    <div style="background:red;"><div style="margin-left:20px"><?php echo form_error('username'); ?></div></div>
    <label for="nama">Username:</label>
    <input type="text" class="form-control" name="username">
  </div>
  <div class="form-group">
    <div style="background:red"><div style="margin-left:20px"><?php echo form_error('nama'); ?></div></div>
    <label for="username">Nama:</label>
    <input type="text" class="form-control" name="nama">
  </div>
  <div class="form-group">
    <div style="background:red"><div style="margin-left:20px"><?php echo form_error('password'); ?></div></div>
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password">
  </div>
  <div class="form-group">
    <div style="background:red"><div style="margin-left:20px"><?php echo form_error('konfirmpassword'); ?></div></div>
    <label for="pwd">Konformasi Password:</label>
    <input type="password" class="form-control" id="pwd" name="konfirmpassword">
  </div>
  <button type="submit" class="btn btn-success form-control">Submit</button>
</form>
