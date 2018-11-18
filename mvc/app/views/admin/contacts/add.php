<?php
include(APPDIR . 'views/layouts/header.php');
include(APPDIR . 'views/layouts/nav.php');
include(APPDIR . 'views/layouts/errors.php');
?>

<h1>Add Contacts</h1>

<p><a href="/contacts/add" class="btn btn-xs btn-info">Add Contact</a></p>

<form method="post">

   <div class="row">

      <div class="col-md-6">
      
         <div class="control-group">
            <label for="name" class="control-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="<?= (isset($_POST['name']) ? $_POST['name'] : ''); ?>" required>
         </div>
      
         <div class="control-group">
            <label for="email" class="control-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="<?= (isset($_POST['email']) ? $_POST['email'] : ''); ?>" required>
         </div>
      
      </div>

      <div class="col-md-6">
      
         <div class="control-group">
            <label for="tel" class="control-label">Telephone</label>
            <input type="number" name="tel" class="form-control" id="tel" value="<?= (isset($_POST['tel']) ? $_POST['tel'] : ''); ?>">
         </div>
      
      </div>

   </div>

   <p><button type="submit" class="btn btn-success" name="submit"><i class="fa fa-check"></i>Submit</button></p>

</form>

<?php include(APPDIR . 'views/layouts/footer.php'); ?>
