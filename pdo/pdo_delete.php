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
    exit();
}

// SQL文を準備します。「:id」がプレースホルダーです。
$sql = 'DELETE FROM user WHERE id=:id';
$prepare = $dbh->prepare($sql);

$prepare->bindValue(':id', 4, PDO::PARAM_INT);
$prepare->execute();

// DELETEされたデータを確認
$sql = 'SELECT * FROM user';
$prepare = $dbh->prepare($sql);

$prepare->execute();

$result = $prepare->fetchAll(PDO::FETCH_ASSOC);
var_dump($result);