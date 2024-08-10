<?php
include 'conn.php';
$id = $_GET['id']; //8
$sql = "DELETE FROM `users` WHERE `u_id` = $id";
$result = mysqli_query($conn,$sql);
if($result){
    header('location:fecth.php');
}
?>