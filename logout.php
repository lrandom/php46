<?php
session_start();
if (isset($_SESSION['auth_user'])) {
    unset($_SESSION['auth_user']);
    header('Location: login.php');
}
?>