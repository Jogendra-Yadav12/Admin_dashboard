<?php include_once('config.php');
session_start();
$sql = "select * from `user`";

$result = mysqli_query($con,$sql);
$user = $_SESSION['user'];
    if($user==false){
        header('location:login.php');
    }
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $password=$row['password'];
        $city=$row['city'];
        echo '<tr>
        <td>'. $name .'</td>
        <td>'. $email .'</td>
        <td>'. $password .'</td>
        <td>'. $city .'</td>
        <td>
        <a href="update.php?updateid='.$id.'"><button class="btn btn-primary">Update</button></a>
        <a href="./database/delete.php?delid='.$id.'"><button class="btn btn-primary">Delete</button></a>
        </td>
        </tr>';
    }
}
?>