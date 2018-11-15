<?php
include(APPDIR . 'views/layouts/header.php');
include(APPDIR . 'views/layouts/nav.php');
include(APPDIR . 'views/layouts/errors.php');
?>

<h1>Add User</h1>

<form method="post">
   <div class="row">
      <div class="col-md-6">
         <div class="control-group">
            <label for="username" class="conrol-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?= (isset($_POST['username']) ? $_POST['username'] : ''); ?>" required>
         </div>

         <div class="control-group">
            <label for="email" class="conrol-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= (isset($_POST['email']) ? $_POST['email'] : ''); ?>" required>
         </div>
      </div>

      <div class="col-md-6">
         <div class="control-group">
            <label for="password" class="conrol-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
         </div>

         <div class="control-group">
            <label for="password_confirm" class="conrol-label">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirm" name="password_confirm" required>
         </div>
      </div>
   </div>
   <p>
      <button type="submit" class="btn btn-success" name="submit"><i class="fa fa-check"></i> Submit</button>
   </p>
</form>

<?php include(APPDIR . 'views/layouts/footer.php'); ?>