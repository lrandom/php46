<?php
require_once 'Human.php';
$luan = new Human();
$luan->name = "Nguyễn Thành Luân";
$luan->height = "1.72";
$luan->weight = "75";
$luan->age = 31;
$luan->walk();//Nguyen Thanh Luan walk

$trung = new Human();
$trung->name = "Nguyễn Thành Trung";
$trung->weight = "71";
$trung->height = "1.74";
$luan->height = "19";
$trung->walk();//Nguyen Thanh Trung walk
$trung->eat();//Nguyen Thanh Trung eat

?>