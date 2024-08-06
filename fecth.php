<?php
include 'conn.php';
$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Created At</th>
            
        </tr>
<?php 
while($row = mysqli_fetch_array($result)){
?>
        <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row['u_name']; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[4]; ?></td>
        </tr>

        <?php 
}
        ?>
    </table>
</body>
</html>