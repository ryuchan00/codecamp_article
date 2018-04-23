<?php

require 'pdo_connect.php';

// SQL文を準備します。「:id」がプレースホルダーです。
$sql = 'DELETE FROM user WHERE id=:id';
$prepare = $dbh->prepare($sql);

$prepare->bindValue(':id', 4, PDO::PARAM_INT);
$prepare->execute();

// DELETEされたデータを確認します
$sql = 'SELECT * FROM user';
$prepare = $dbh->prepare($sql);

$prepare->execute();

$result = $prepare->fetchAll(PDO::FETCH_ASSOC);
var_dump($result);