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
<?php
try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=php_46", "root", "koodinh@");
} catch (Exception $exception) {
    echo "Lỗi kết nối CSDL";
}

$rs = $pdo->query("SELECT * FROM users");
foreach ($rs as $user) {
    echo $user['full_name'] . "<br/>";
    echo $user['age'] . "<br/>";
}

?>
</body>
</html>