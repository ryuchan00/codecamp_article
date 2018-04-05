<?php
//$line = "${_POST['column1']}, ${_POST['column2']}";
$line = <<<CSV
aaa
bbb,ccc
CSV;

// 結果をファイルに書き出します
file_put_contents('file3.csv', $line);
