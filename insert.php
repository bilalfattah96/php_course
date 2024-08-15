<?php
//Basic Function

// function abc(){
//     echo 'hello';
// }
// abc();

// function with parameter 

// function add($num1,$num2){
// $result = $num1 + $num2;
// return $result;
// }

// echo add(10,20);

// echo $sum;


// default argument function 

// function abc($height = 50){
// echo "The height is $height";
// }
// abc(150);


?>


<?php
if (isset($_POST['btn'])) {
    include 'conn.php';
    $n =  $_POST['name'];
    $a =  $_POST['age'];
    $e =  $_POST['email'];

    $imgname = $_FILES['img']['name'];
    $tmp =  $_FILES['img']['tmp_name'];
    $size = $_FILES['img']['size'];
    $type = $_FILES['img']['type'];
    // var_dump($type);

    $max_size = 2 * 1024 * 1024; // 2MB

    $allowed_types = ['image/png', 'image/jpg', 'image/jpeg'];

    if (in_array($type, $allowed_types)) {

        if ($size <= $max_size) {

            move_uploaded_file($tmp, 'userImage/' . $imgname);
            $sql = "INSERT INTO `users`( `u_name`, `u_email`, `age`,u_img) VALUES ('$n','$e','$a','$imgname')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                // echo '<script>alert("inserted")</script>';
                header('Location: fecth.php');
            }
        } else {
            echo 'Max 2MB is Allowed';
        }
    } else {
        echo 'Only JPG PNG and JPEG allowed';
    }
}

?>


<!-- <script>
    window.location.href = ''
</script> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        Name: <input type="text" name="name"> <br> <br>
        Age: <input type="number" name="age"> <br> <br>
        Email: <input type="email" name="email"> <br> <br>
        <input type="file" name="img" id="">

        <input type="submit" name="btn">
    </form>
</body>

</html>