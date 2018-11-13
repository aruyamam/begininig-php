<?php include(APPDIR . 'views/layouts/header.php'); ?>

<div class="wrapper well">

   <?php include(APPDIR . 'views/layouts/errors.php'); ?>

   <h1>Change Password</h1>

   <form method="post">
      <input type="hidden" name="token" value="<?=$token;?>">

      <div class="control-group">
         <label for="password" class="control-label">Password</label>
         <input type="password" name="password" id="password" class="form-control" required>
      </div>
      
      <div class="control-group">
         <label for="password_confirm" class="control-label">Password Confirm</label>
         <input type="password_confirm" name="password_confirm" id="password" class="form-control" required>
      </div>

      <p class="pull-left">
         <button type="submit" class="btn btn-sm btn-success" name="submit">Change Password</button>
      </p>

      <div class="clearfix"></div>

   </form>

</div>

<?php include(APPDIR . 'views/layouts/footer.php'); ?>