<?php

// 配列
$vegetable = [
    "carrot",
    "tomato",
    "lettuce"
];

// 添え字に整数を用いる
echo $vegetable[0], PHP_EOL;

// 新しく要素を追加する時
$vegetable[] = "potato";

var_dump($vegetable);


// 連想配列
$vegetable_color = [
    "carrot" => "orange",
    "tomato" => "red",
    "lettuce" => "green"
];

// 添え字に文字列を用いる
echo $vegetable_color["carrot"], PHP_EOL;

// 新しく要素を追加する時
$vegetable_color["potato"] = "brown";

var_dump($vegetable_color);