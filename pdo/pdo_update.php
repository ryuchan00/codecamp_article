<?php

require 'pdo_connect.php';

// SQL文を準備します。「:id」「:name」がプレースホルダーです。
$sql = 'UPDATE user SET name=:name WHERE id=:id';
$prepare = $dbh->prepare($sql);

$prepare->bindValue(':id', 4, PDO::PARAM_INT);
$prepare->bindValue(':name', 'kikuchi', PDO::PARAM_STR);
$prepare->execute();

// UPDATEされたデータを確認
$sql = 'SELECT * FROM user';
$prepare = $dbh->prepare($sql);

$prepare->execute();

$result = $prepare->fetchAll(PDO::FETCH_ASSOC);
var_dump($result);