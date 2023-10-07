<?php include_once('Header.php') ?>
<div class="container mt-5">
    <a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
</svg></a>
    <h1 class="mt-2">Products</h1>
<table class="table table-dark table-striped fs-6">
    <tr>
        <th>Name</th>
        <th>price</th>
        <th>Company</th>
        <th>Operations</th>
    </tr>
<?php include_once('./database/product.php');?>
</table>
<a href="add_product.php"><button class="btn btn-primary">Add Product</button></a>
</div>
<?php include_once('Footer.php') ?>