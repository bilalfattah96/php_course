<?php
    // echo $_POST['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>welcome <?php echo $_REQUEST['name']; ?></h4>
    <h4> <?php echo $_REQUEST['email']; ?></h4>
    <h4> <?php echo $_REQUEST['age']; ?></h4>

    <?php 
    if($_REQUEST['age'] < 18){
        echo '<p>you are a child</p>';
    }
    else if($_REQUEST['age'] < 30){
        echo '<p>you are young</p>';
    }
    else{
        echo '<p>you are old</p>';
    }
    ?>
</body>
</html>