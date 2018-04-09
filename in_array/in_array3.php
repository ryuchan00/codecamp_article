<?php
$preson_like_colors = [
    "Mike" => ["blue"],
    "John" => ["yellow","red"],
    "Abigail" => ["pink","red"],
    "Joseph" => ["red"],
    "Riley" => ["red", "pink"]
];
$like_color = ["red", "pink"];

if (in_array($like_color, $preson_like_colors, TRUE)) {
    echo "like_colorは存在しています。\n";
} else {
    echo "like_colorは存在していません。\n";
}