<?php
function connectDBServer()
{
    $localhost = "127.0.0.1";
    $username = "root";
    $password = "koodinh@";
    $database = "php_46";
    $connected = mysqli_connect($localhost, $username, $password, $database);
    if (!$connected) {
        echo "Kết nối thất bại" . mysqli_connect_error();
        return null;
    }
    return $connected;
}
