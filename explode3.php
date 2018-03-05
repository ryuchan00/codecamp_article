<?php
$str = "ハラミ,ホルモン,ロース,カルビ,タン";
// ","（カンマ）で分割
// 最大の要素数を３とする
$parts = explode(",", $str, 3);
print_r($parts);
