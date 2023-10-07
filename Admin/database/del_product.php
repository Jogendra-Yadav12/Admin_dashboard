<?php
include_once('config.php');
if(isset($_GET['delid'])){
    $id =$_GET['delid'];
    $sql="delete from `product` where id=$id";
    $result= mysqli_query($con,$sql);
    
    if ($result){
        header('Location:../product.php');
    }else{
        "alert('Something went wrong')";
    }
}
?>