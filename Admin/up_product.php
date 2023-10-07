<?php include_once('Header.php') ?>
<div class="container mt-5">
<a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
</svg></a>
<h1 class="mt-2">Update Product</h1>
<form class="row g-3 p-5" method="POST">
<?php include_once('./database/up_product.php') ?>
<div class="col-12">
    <label for="inputName" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputName" placeholder="Name" name="name">
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Price</label>
    <input type="text" class="form-control" id="inputEmail4" name="price">
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">Comapny</label>
    <input type="text" class="form-control" id="inputPassword4" name="company">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="update">Update</button>
  </div>
</form>
<div>
<?php include_once('Footer.php') ?>