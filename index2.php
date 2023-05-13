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
$weather = "sunny";
if ($weather == "rain") {
    echo "Sleep";
} else {
    echo "Play soccer";
}

//if-else-if
$weather = "sunny";
if ($weather == "rain") {
    echo "Sleep";
} else if ($weather == "sunny") {
    echo "Play soccer";
} else if ($weather == "windy") {
    echo "Go fishing";
} else if ($weather == "snow") {
    echo "Go skiing";
} else {
    echo "Stay at home";
}

//nested if - if lồng nhau
$weather = "sunny";
$degree = 30;
if ($weather == "rain") {
    if ($degree > 30) {
        echo "Sleep";
    }
} else if ($weather == "sunny") {
    if ($degree > 30) {
        echo "Play soccer";
    } else {
        echo "Go swimming";
    }
} else if ($weather == "windy") {
    if ($degree > 30) {
        echo "Go fishing";
    } else {
        echo "Go shopping";
    }
} else if ($weather == "snow") {
    if ($degree > 30) {
        echo "Go skiing";
    } else {
        echo "Go shopping";
    }
} else {
    echo "Stay at home";
}

$age = 31;
switch ($age) {
    case 1:
        echo "1 tuoi";
        break;
    case 2:
        echo "2 tuoi";
        break;
    case 3:
        echo "3 tuoi";
        break;
    case 4:
        echo "4 tuoi";
        break;
    case 5:
        echo "5 tuoi";
        break;
    default:
        echo "Khong biet";
        break;
}
?>
</body>
</html>