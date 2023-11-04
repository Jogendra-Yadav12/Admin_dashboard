<?php include_once("config.php");
    $id = $_GET['updateid'];
    if(isset($_POST['update'])){
    $filename = $_FILES["img"]["name"];
    $tempname = $_FILES["img"]["tmp_name"];
    $folder = "images/".$filename;
    move_uploaded_file($tempname,$folder);
    
    $image=$filename;
    $name = $_POST['name'];
    $price = $_POST['price'];
    $company = $_POST['company'];
    $sql = "update `product` 
    set id=$id,name='$name',price='$price',company='$company',img='$image'
    where id=$id"; 
    $result = mysqli_query($con,$sql);
    if($result){
        header('Location:product.php');
    }else{
        die(mysqli_error($result));
    }
}
?>