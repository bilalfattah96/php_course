<?php
include 'conn.php';
$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn, $sql);

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
            <th>User Image</th>
            <th>Created At</th>
            <th colspan="2">Action</th>

        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
        ?>
                <tr>
                    <td><?php echo $row[0]; ?></td>
                    <td><?php echo $row['u_name']; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><img src="<?php echo "userImage/".$row[4]; ?>" alt="" height="50" width="50"></td>
                    <td><?php echo $row[5]; ?></td>
                    <td><a href="delete.php?id=<?php echo $row[0]; ?>">Delete</a></td>
                    <td><a href="edit.php?id=<?php echo $row[0]; ?>">Edit</a></td>
                </tr>

            <?php
            }
        } else {


            ?>

            <tr>
                <td colspan="6">No Record Found</td>
            </tr>

        <?php
        }
        ?>
    </table>
</body>

</html>