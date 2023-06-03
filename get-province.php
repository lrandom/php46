<?php
//CRUD - THÊM SỦA XOÁ LẤY RA, C-CREATE, R-READ, U-UPDATE, D-DELETE
require_once 'connect.php';
$connected = connectDBServer();
$sql = "SELECT * FROM provinces";
//result-set
$result = mysqli_query($connected, $sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    <?php
    mysqli_fetch_assoc($result);
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
        </tr>
    <?php
    }
    ?>

    </tbody>
</table>

</body>
</html>