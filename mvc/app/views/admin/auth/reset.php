<?php include(APPDIR . 'views/layouts/header.php'); ?>

<div class="wrapper well">

   <?php include(APPDIR . 'views/layouts/errors.php'); ?>

   <h1>Reset Account</h1>

   <form method="post">
   
      <div class="control-group">
         <label for="email" class="control-label">Email</label>
         <input name="email" type="text" id="email" class="form-control">
      </div>

      <p class="float-left">
         <button type="submit" class="btn btn-sm btn-success" name="submit">Send reset</button>
      </p>
      <p class="float-right">
         <a href="/admin/login">Login</a>
      </p>

      <div class="clearfix"></div>

   </form>

</div>

<?php include(APPDIR . 'views/layouts/footer.php'); ?>
