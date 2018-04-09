<?php
static $fruits = ["orage", "banana", 0];

if (in_array("apple", $fruits, TRUE)) {
    echo "appleは存在しています。\n";
} else {
    echo "appleは存在していません。\n";
}

