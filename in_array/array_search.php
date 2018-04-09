<?php

$fruits = [
    "apple" => "red",
    "lemon" => "yellow",
    "peach" => "pink",
    "banana" => "yellow",
];
$color = "yellow";

$key = (array_search($color, $fruits, TRUE));
echo "${color}が含まれているキーは${key}です\n";
