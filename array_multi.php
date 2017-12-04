<?php
$array = [
    "fruit" => [
        "apple" => "red",
        "orange" => "orage"
    ],
    "vegetable" => [
        "carrot" => "orange",
        "tomato" => "red",
        "lettuce" => "green"
    ]
];
var_dump($array);

// 個別要素へのアクセス
echo $array["fruit"]["apple"], PHP_EOL;
?>
