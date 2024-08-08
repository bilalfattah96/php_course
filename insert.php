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
    $sql = " INSERT INTO `users`( `u_name`, `u_email`, `age`) VALUES ('$n','$e','$a')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo '<script>alert("inserted")</script>';
        header('Location: fecth.php');
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
    <form action="" method="post">
        Name: <input type="text" name="name"> <br> <br> 
        Age: <input type="number" name="age"> <br> <br>
        Email: <input type="email" name="email"> <br> <br>
        <input type="submit" name="btn">
    </form>
</body>

</html>