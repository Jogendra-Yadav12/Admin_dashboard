<?php include_once('Header.php') ?>
<div class="container mt-5">
<h1 class="mt-2">Signup Form</h1>
<form class="row g-3 p-5" method="POST" enctype="multipart/form-data">
<?php include_once('./database/add_user.php') ?>
<div class="col-12">
    <label for="inputName" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputName" placeholder="Name" name="name">
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email">
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password">
  </div>
  <div class="col-md-12">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" name="city">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="signup">Signup</button>
  </div>
  <p>Already have Account <a href="login.php">login</a></p>
</form>
<div>
<?php include_once('Footer.php') ?>