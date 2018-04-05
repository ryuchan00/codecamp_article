<?php
// colomun1の中で改行している。
$line = "{$_POST['column1']}, {$_POST['column2']}";

// 結果をファイルに書き出します
file_put_contents('file3.csv', $line);
