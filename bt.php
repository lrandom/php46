<?php
if (isset($_FILES['img_0']) && isset($_FILES['img_0']['name'])) {
    for ($i = 0; $i < count($_FILES); $i++) {
        $img = $_FILES['img_' . $i]; //img_0, img_1, img_2, ...
        $imgName = $img['name'];
        $imgTmp = $img['tmp_name'];
        $uploadDir = './uploads/';
        $uploadFile = $uploadDir . $imgName;
        move_uploaded_file($imgTmp, $uploadFile);
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
    <link type="text/css" rel="stylesheet" href="./assest/css/bt.css?x=<?php echo time(); ?>"/>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <div class="files-wrapper">
        <div class="file-item">
            <input type="file" name="img_0"/>
            <div class="btn" onclick="removeFileItem(this)">Xóa</div>
        </div>
    </div>
    <div class="btn" onclick="addMoreInputField()">Add More</div>
    <button class="btn">Submit</button>
</form>

<script src="assest/js/bt.js"></script>
</body>
</html>