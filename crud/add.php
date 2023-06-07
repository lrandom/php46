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
$conn = mysqli_connect('127.0.0.1',
    'root',
    'koodinh@',
    'php_46');
$rs = mysqli_query($conn,"SELECT * FROM provinces");
if (!$conn) {
    die('Khong the ket noi');
}
?>
<form>
    <input name="full_name" placeholder="full name"/>
    <input name="age" placeholder="age"/>
    <select name="province_id">
        <?php while($row = mysqli_fetch_assoc($rs)): ?>
        <option value="<?php echo $row['id'] ?>"><?php echo $row['name']; ?></option>
        <?php endwhile; ?>
    </select>
    <button>Submit</button>
</form>
</body>
</html>