<?php
require_once 'connect.php';

//check xem có id và id có phải số hay không
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $connected = connectDBServer();
    if (isset($_POST['province'])) {
        $provinceName = $_POST['province'];
        $sql = "UPDATE provinces SET name = '" . $provinceName . "' WHERE id = " . $id;
        mysqli_query($connected, $sql);
    }
    $sql = "SELECT * FROM provinces WHERE id = " . $id;

    $result = mysqli_query($connected, $sql);
    $provinceDataFromDB = mysqli_fetch_assoc($result);

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
    <input placeholder="Input Province Name" name="province" value="<?php echo $provinceDataFromDB['name']; ?>"/>
    <button type="submit">Submit</button>
</form>
</body>
</html>