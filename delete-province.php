<?php
if ($_GET['id'] && is_numeric($_GET['id'])) {
    require_once 'connect.php';
    $connect = connectDBServer();
    $id = $_GET['id'];
    $sql = "DELETE FROM provinces WHERE id = " . $id;
    mysqli_query($connect, $sql);
}
header("Location: get-province.php");
?>