<?php
require_once 'Human.php';
$luan = new Human("Nguyễn Thành Luân", 31, "75", "1.72");
$luan->walk();//Nguyen Thanh Luan walk

$trung = new Human("Nguyễn Thành Trung", 19, "71", "1.74");
//$trung->name = "Nguyễn Thành Trung";
echo $trung->getName();//Nguyễn Thành Trung
$trung->setName("Nguyễn Thành Trung");
$trung->walk();//Nguyen Thanh Trung walk
$trung->eat();//Nguyen Thanh Trung eat

require_once 'Student.php';
$bob = new Student("BOB", 19, "71", "1.74");
$bob->walk();//BOB walk
$bob->test();//BOB study
$bob->getStudentClassName();//error

require_once 'ABTransporter.php';
Student::$hihi;
Student::haha();


?>