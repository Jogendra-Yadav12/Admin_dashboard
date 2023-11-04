<?php include_once("config.php");
    if(isset($_POST['product'])){
    $filename = $_FILES["img"]["name"];
    $tempname = $_FILES["img"]["tmp_name"];
    $folder = "images/".$filename;
    move_uploaded_file($tempname,$folder);
    $image=$filename;
    $name = $_POST['name'];
    $price = $_POST['price'];
    $company = $_POST['company'];
    $sql = "insert into `product`(img,name,price,company) values('$image','$name','$price','$company') "; 
    $result = mysqli_query($con,$sql);
    if($result){
        header('Location:product.php');
    }else{
        die(mysqli_error($result));
    }
}
?>