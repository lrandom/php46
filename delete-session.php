<?php
session_start();
if (isset($_SESSION['user'])) {
    //xoá môt session cụ thể
    unset($_SESSION['user']);
}
session_destroy();//xoá toàn bộ session
?>