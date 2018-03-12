<?php
$mystring = 'I am Taro. I am Japanese.';
$findme = 'I';

$position = strpos($mystring, $findme);
resultStrpos($mystring, $findme, $position);

// 第三引数を指定して、最初の「I」は無視する。
$position = strpos($mystring, $findme, 10);
resultStrpos($mystring, $findme, $position);

// 検索したいワードが見つからない場合、「FALSE」が返ってくる。
$findme = 'You';
$position = strpos($mystring, $findme);
resultStrpos($mystring, $findme, $position);

function resultStrpos($mystring, $findme, $position)
{
    if ($position === false) {
        echo "文字列 '$findme' は、文字列 '$mystring' の中で見つかりませんでした</br>";
    } else {
        echo "文字列 '$findme' が文字列 '$mystring' の中で見つかりました</br>";
        echo " 見つかった位置は $position です</br>";
    }
}