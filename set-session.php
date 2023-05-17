<?php
session_start();
$_SESSION['user'] = [
    'email' => 'a@ex ample.com',
    'age' => 20,
    'address' => 'HN'
];
?>