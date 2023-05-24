<?php
if (isset($_FILES['img']) && $_FILES['img']['name']) {
    //có file gửi lên server
    //đường dẫn file trong thư mục tạm
    $tmpPath = $_FILES['img']['tmp_name'];
    $fileName = $_FILES['img']['name'];
    $year = date('Y');
    $month = date('m');
    $newFolder = $month . '_' . $year;
    //uploads/05_2023
    if (!file_exists('uploads/' . $newFolder)) {
        mkdir('uploads/' . $newFolder, 0775);
    }
    move_uploaded_file($tmpPath, 'uploads/' . $newFolder . '/' . time() . $fileName);
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
<form method="post" enctype="multipart/form-data">
    <input type="file" name="img"/>
    <button>Submit</button>
</form>
</body>
</html>