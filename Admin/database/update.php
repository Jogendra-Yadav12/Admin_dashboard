<?php include_once("config.php");
    $id = $_GET['updateid'];
    if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $city = $_POST['city'];
    $sql = "update `user` 
    set id=$id,name='$name',email='$email',password='$password',city='$city'
    where id=$id"; 
    $result = mysqli_query($con,$sql);
    if($result){
        header('Location:user.php');
    }else{
        die(mysqli_error($result));
    }
}
?>