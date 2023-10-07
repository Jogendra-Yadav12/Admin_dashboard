<?php include_once("config.php");
    if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $city = $_POST['city'];
    $sql = "insert into `user`(name,email,password,city) values('$name','$email','$password','$city') "; 
    $result = mysqli_query($con,$sql);
    if($result){
        header('Location:user.php');
    }else{
        die(mysqli_error($result));
    }
}
?>