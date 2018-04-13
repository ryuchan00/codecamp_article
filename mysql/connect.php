<?php

$link = mysqli_connect('127.0.0.1', 'root', 'root', 'codecamp');

// 接続状況をチェックします
if (mysqli_connect_errno()) {
    die("データベースに接続できません:" . mysqli_connect_error() . "\n");
}

$query = 'SELECT * FROM user';

// Select クエリを実行します。
if ($result = mysqli_query($link, $query)) {

    // 1行ずつ結果を出力する
    foreach ($result as $row) {
        print_r($row);
    }

    // 結果セットを開放します
    mysqli_free_result($result);
}

// 接続を閉じます
mysqli_close($link);
