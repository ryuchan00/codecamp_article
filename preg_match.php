<?php
$pattern = '/(php)[\s\w]*(language)/i';
$mystring = "PHP is the web scripting language of choice.";
// パターンのデリミタの後の "i" は、大小文字を区別しない検索を示す
if (preg_match($pattern, $mystring, $matches)) {
    echo "<pre>";
    print_r($matches);
    echo "</pre>";
} else {
    echo "'$mystring'の中には見つかりませんでした";
}