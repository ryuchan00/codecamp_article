<?php

// ドライバ呼び出しを使用して MySQL データベースに接続する
$dsn = 'mysql:dbname=shop;host=127.0.0.1';
$user = 'root';
$password = 'root';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo '接続失敗: ' . $e->getMessage() . "\n";
}

