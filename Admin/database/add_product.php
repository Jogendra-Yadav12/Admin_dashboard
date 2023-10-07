<?php include_once("config.php");
    if(isset($_POST['product'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $company = $_POST['company'];
    $sql = "insert into `product`(name,price,company) values('$name','$price','$company') "; 
    $result = mysqli_query($con,$sql);
    if($result){
        header('Location:product.php');
    }else{
        die(mysqli_error($result));
    }
}
?>