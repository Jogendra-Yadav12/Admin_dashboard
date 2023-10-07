<?php
include_once('config.php');
if(isset($_GET['delid'])){
    $id =$_GET['delid'];

    $sql="delete from `user` where id=$id";
    $result= mysqli_query($con,$sql);
    
    if ($result){
        header('Location:../user.php');
    }else{
        echo "<script>alert('Something went wrong')</script>";
    }
}
?>
