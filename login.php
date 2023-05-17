<?php
session_start();
//check xem đã đăng nhập hay chưa
if (isset($_SESSION['auth_user'])) {
    header('Location: profile.php');
}
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    //so khớp vs CSDL
    //khởi tạo session cho user đăng nhập
    $_SESSION['auth_user'] = [
        'email' => $email
    ];
    header('Location: profile.php');
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
    <input type="email" name="email" placeholder="Email">
    <br>
    <input type="password" name="password" placeholder="Password">
    <br>
    <button>Submit</button>
</form>
</body>
</html>