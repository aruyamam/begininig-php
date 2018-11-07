<?php include(APPDIR . 'views/layouts/header.php'); ?>

<div class="wrapper well">

   <?php include(APPDIR . 'views/layouts/errors.php'); ?>

   <form action="/admin/login" method="post">
   
      <h1>Login</h1>

      <div class="control-gruop">
         <label class="control-label" for="username" class="control-label">Username</label>
         <input class="form-control" id="username" type="text" name="username">
      </div>

      <div class="control-label" class="control-gruop">
         <label for="password" class="control-label">Password</label>
         <input class="form-control" id="password" type="password" name="password">
      </div>

      <p class="pull-left">
         <button type="submit" class="btn btn-sm btn-success" name="submit">Login</button>
      </p>
      <p class="pull-right"><a href="/admin/reset">Forgot Password</a></p>

      <div class="clearfix"></div>
   
   </form>

</div>

<?php include(APPDIR . 'views/layouts/footer.php'); ?>
