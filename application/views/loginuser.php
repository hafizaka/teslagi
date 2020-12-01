<center><h2>LOGIN USER</h2></center><br>

  <form method="POST" action="<?php echo site_url('home/login/User'); ?>">
    <div class="form-group">
      <div style="background:red;"><div style="margin-left:20px"><?php echo form_error('username'); ?></div></div>
      <label for="username">Username:</label>
      <input type="text" class="form-control" name="username">
    </div>
    <div class="form-group">
    <div style="background:red;"><div style="margin-left:20px"><?php echo form_error('password'); ?></div></div>
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" name="remember" type="checkbox"> Remember me
      </label>
    </div>
  <button type="submit" class="btn btn-success form-control">Submit</button>
  </form>
