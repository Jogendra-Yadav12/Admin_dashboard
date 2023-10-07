<?php include_once('config.php');
    session_start();
    if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from `user` where email='$email' and password='$password' ";
    
    $result =mysqli_query($con,$sql);
    $total = mysqli_num_rows($result);

        if($total == 1){
            $_SESSION['user'] = $email;
            header('location:home.php');
        }
        else{
            echo "<script> alert('Please enter correct email & password') </script>";
        }
    }
?>