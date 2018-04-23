<?php

// 先ほど作成したPDOインスタンス作成をそのまま使用する
require 'pdo_connect.php';

// SQL文を準備します。「:id」がプレースホルダーです。
$sql = 'SELECT * FROM user WHERE id < :id';
// PDOStatementクラスのインスタンスを生成
$prepare = $dbh->prepare($sql);

$prepare->bindValue(':id', 3, PDO::PARAM_INT);
$prepare->execute();

$result = $prepare->fetchAll(PDO::FETCH_ASSOC);
var_dump($result);