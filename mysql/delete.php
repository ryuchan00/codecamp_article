<?php

$link = mysqli_connect('127.0.0.1', 'root', 'root', 'shop');
//$link = mysqli_connect('localhost', 'user', 'pass', 'shop');

// 接続状況をチェックします
if (mysqli_connect_errno()) {
    die("データベースに接続できません:" . mysqli_connect_error() . "\n");
}

echo "データベースの接続に成功しました。\n";

$query = "DELETE FROM user WHERE id = 2;";

// クエリを実行します。
if (mysqli_query($link, $query)) {
    echo "DELETE に成功しました。\n";
}

// 接続を閉じます
mysqli_close($link);
