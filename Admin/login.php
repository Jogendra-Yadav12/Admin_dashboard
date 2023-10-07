<?php include_once('Header.php') ?>
<?php include_once('./database/login.php') ?>
<div class="container mt-5">
    <h1 class="container mt-2">Login Form</h1>
    <form class="p-5" method="POST">
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="login">Login</button>
  <div class="col-12">
    Don't have account <a href="register.php">Signup</a>
  </div>
</form>
</div>
<?php include_once('Footer.php') ?>