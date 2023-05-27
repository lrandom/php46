<?php
if (isset($_POST['hobbies'])) {
    $hobbies = $_POST['hobbies'];
    foreach ($hobbies as $hobby) {
        echo $hobby . '<br>';
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
    <div>
        <label for="">Đá bóng</label>
        <input type="checkbox" value="1" name="hobbies[]">
    </div>

    <div>
        <label for="">Đọc sách</label>
        <input type="checkbox" value="2" name="hobbies[]">
    </div>

    <button>Submit</button>
</form>
</body>
</html>