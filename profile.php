<?php
session_start();
if (isset($_SESSION['auth_user'])) {
    //user đã đăng nhập
    $authUser = $_SESSION['auth_user'];
} else {
    header('Location: login.php');
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
<?php if (isset($authUser)) {
    echo $authUser['email'];
} ?>
<a href="logout.php">Logout</a>
</body>
</html>
