<?php
include(APPDIR . 'views/layouts/header.php');
include(APPDIR . 'views/layouts/nav.php');
include(APPDIR . 'views/layouts/errors.php');
?>

<h1>Edit Contact</h1>

<form method="post">

   <div class="row">
   
      <div class="col-md-6">
         <div class="control-group">
            <label for="name" class="control-label"> Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $contact->name; ?>" required>
         </div>

         <div class="control-group">
            <label for="email" class="control-label"> Email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?= $contact->email; ?>" required>
         </div>
      </div>

      <div class="col-md-6">
         <div class="control-group">
            <label for="tel" class="control-label">Telephone</label>
            <input type="number" class="form-control" id="tel" name="tel" value="<?= $contact->tel; ?>">
         </div>
      </div>
   
   </div>

   <p><button type="submit" name="submit" class="btn btn-success"><i class="fa fa-check">Submit</i></button></p>

</form>

<?php include(APPDIR . 'views/layouts/footer.php'); ?>
