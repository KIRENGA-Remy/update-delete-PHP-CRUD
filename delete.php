<?php
include "connection.php";
if(isset($_GET['deleteid'])){

    $id=$_GET['deleteid'];
    $sql="DELETE FROM `users` WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('Location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>