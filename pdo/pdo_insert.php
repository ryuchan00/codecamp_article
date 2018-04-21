<?php

// ドライバ呼び出しを使用して MySQL データベースに接続する
$dsn = 'mysql:dbname=shop;host=127.0.0.1';
$user = 'root';
$password = 'root';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo "接続成功\n";
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
}

// SQL文を準備します。「:id」「:name」がプレースホルダーです。
$sql = 'INSERT INTO user (id, name) VALUE (:id, :name)';
$prepare = $dbh->prepare($sql);

$prepare->bindValue(':id', 4);
$prepare->bindValue(':name', 'kobayashi');
$result = $prepare->execute();

var_dump($result);