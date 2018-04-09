<?php

$fruits = [
    "apple" => "red",
    "lemon" => "yellow",
    "peach" => "pink",
    "banana" => "yellow",
];
$like_color = "pink";

if (in_array($like_color, $fruits, TRUE)) {
    echo "${like_color}は存在しています。\n";
} else {
    echo "${like_color}は存在していません。\n";
}