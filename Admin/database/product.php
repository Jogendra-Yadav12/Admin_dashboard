<?php include_once('config.php');
session_start();
$sql = "select * from `product`";

$result = mysqli_query($con,$sql);
$user = $_SESSION['user'];
if($user == false){
    header('location:login.php');
}
if($result){
    while($row=mysqli_fetch_assoc($result)){
        static $x = 1;
        $id=$row['id'];
        $image = $row['img'];
        $name=$row['name'];
        $price=$row['price'];
        $company=$row['company'];
        echo '<tr>
        <td>'. $x .'</td>
        <td> <img src="./images/'. $image .'" alt="" id="img"></td>
        <td>'. $name .'</td>
        <td>' . 'Rs.' . $price .'</td>
        <td>'. $company .'</td>
        <td>
        <a href="up_product.php?updateid='.$id.'"><button class="btn btn-primary">Update</button></a>
        <a href="./database/del_product.php?delid='.$id.'"><button class="btn btn-primary">Delete</button></a>
        </td>
        </tr>';
        $x++;
    }
}
?>