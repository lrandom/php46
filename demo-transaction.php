<?php
$pdo = new PDO('mysql:host=127.0.0.1;dbname=php46;charset=utf8',
    'root', 'koodinh@');
//transaction
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->beginTransaction();
try {
    $pdo->query("INSERT INTO provinces(name) VALUES('Hưng Yên')");
    $provinceID = $pdo->lastInsertId();
    $pdo->query("INSERT INTO users(full_names,ages,province_id) VALUES ('Nguyễn Văn C', 20, $provinceID)");
    $pdo->commit();//lưu vào CSDL
} catch (Exception $exception) {
    echo $exception->getMessage();
    $pdo->rollBack();//hủy tất cả các thao tác trước đó
}
?>
