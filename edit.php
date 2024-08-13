<?php
include 'conn.php';
$id = $_GET['id']; //9
$sql = "SELECT * FROM `users` where u_id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if(isset($_POST['btn'])){
    $n = $_POST['name'];
    $a = $_POST['age'];
    $e = $_POST['email'];

  $imgname=  $_FILES['img']['name'];
   $tmp = $_FILES['img']['tmp_name'];
move_uploaded_file($tmp,"userImage/".$imgname);

    $sqlUpdate = "UPDATE `users` SET `u_name`='$n',`u_email`='$e',`age`='$a', u_img = '$imgname' WHERE u_id = $id";
    $result1 = mysqli_query($conn,$sqlUpdate);
    if($result1){
        header('location:fecth.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        Name: <input type="text" name="name" value="<?php echo $row[1]; ?>"> <br> <br>
        Age: <input type="number" name="age" value="<?php echo $row[3]; ?>"> <br> <br>
        Email: <input type="email" name="email" value="<?php echo $row[2]; ?>"> <br> <br>
        <img src="<?php echo "userImage/".$row[4]; ?>" alt="" height="50" width="50">
        <input type="text" hidden value="<?php echo $row[4]; ?>" name="pimg">
        Image <input type="file" name="img" id="">
        <input type="submit" name="btn" value="Update">
    </form>
</body>

</html>