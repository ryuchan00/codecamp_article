<?php

$link = mysqli_connect('127.0.0.1', 'root', 'root', 'shop');
//$link = mysqli_connect('localhost', 'user', 'pass', 'shop');

// 接続状況をチェックします
if (mysqli_connect_errno()) {
    die("データベースに接続できません:" . mysqli_connect_error() . "\n");
}

echo "データベースの接続に成功しました。\n";

$query = "SELECT id, name FROM user;";

// Select クエリを実行します。
if ($result = mysqli_query($link, $query)) {
    echo "SELECT に成功しました。\n";
    foreach ($result as $row) {
        var_dump($row);
    }
}

// 接続を閉じます
mysqli_close($link);
