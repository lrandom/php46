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
$conn = new PDO("mysql:host=127.0.0.1;dbname=php_46", "root", "koodinh@");
$provinces = $conn->query("SELECT * FROM provinces");
$prp = $conn->prepare("INSERT INTO users(full_name, age, province_id) VALUES (:full_name, :age, :province_id)");
$prp->bindParam(":full_name", $fullName);
$prp->bindParam(":age", $age);
$prp->bindParam(":province_id", $provinceId);
if(isset($_POST['full_name'])) {
    $fullName = $_POST['full_name'];
    $age = $_POST['age'];
    $provinceId = $_POST['province_id'];
    $prp->execute();


}
?>
<form method="post">
    <input name="full_name" placeholder="full name"/>
    <input name="age" placeholder="age"/>
    <select name="province_id">
        <?php foreach ($provinces as $province): ?>
        <option value="<?php echo $province['id'] ?>"><?php echo $province['name']; ?></option>
        <?php endforeach; ?>
    </select>
    <button>Submit</button>
</form>
</body>
</html>