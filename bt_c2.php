<?php
if(isset($_FILES['img'])){
    var_dump($_FILES['img']);
    $files = $_FILES['img'];//mang thong tin file
    $count = count($files['name']);
    for($i = 0; $i < $count; $i++){
        $name = $files['name'][$i];
        $tmp_name = $files['tmp_name'][$i];
        move_uploaded_file($tmp_name, './uploads/'.$name);
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
            <input type="file" name="img[]"/>
            <div class="btn" onclick="removeFileItem(this)">Xóa</div>
        </div>
    </div>
    <div class="btn" onclick="addMoreInputField()">Add More</div>
    <button class="btn">Submit</button>
</form>

<script src="assest/js/bt_2.js"></script>
</body>
</html>