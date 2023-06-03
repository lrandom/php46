<?php
require_once 'connect.php';
if (isset($_POST['province'])) {
    $connected = connectDBServer();
    $province = $_POST['province'];
    if ($connected) {
        echo "Kết nối thành công";
        $sql = "INSERT INTO provinces(name) VALUES('" . $province . "')";
        mysqli_query($connected, $sql);
        $lastId = mysqli_insert_id($connected);
        echo "Last ID:". $lastId;
    } else {
        echo "Thêm thất bại";
    }
}
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
<form method="post">
    <input placeholder="Input Province Name" name="province"/>
    <button type="submit">Submit</button>
</form>
</body>
</html>