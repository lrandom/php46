<?php
//mảng chỉ số nguyên
/*$cars = [
    "BMW",
    "Audi"
];

$cars = array("BMW", "Audi");

$cars = [];
$cars[] = "BMW";
$cars[] = "Audi";

echo $cars[0];
echo $cars[1];

for ($i = 0; $i < count($cars); $i++) {
    echo $cars[$i];
}

foreach ($cars as $carItem) {
    echo $carItem;
}*/

//mảng liên hợp - liên kết
/*$user = [
    "name" => "Nguyen Van Nam",
    "age" => 20,
    "address" => "Ha Noi"
];
echo $user["name"];
echo $user["age"];

foreach ($user as $userItemKey=>$userItemVal) {
    echo $userItemKey . ":" . $userItemVal;
}*/

$users = [
    'user-1' => [
        'name' => 'Name',
        'age' => 20
    ],
    'user-2' => [
        'name' => 'Luan',
        'age' => 31
    ]
];
echo $users['user-1']['age'];//20
foreach ($users as $userNumber=>$userVal){
    foreach ($userVal as $itemKey => $itemVal) {
        echo $itemVal;
    }
}
?>