<?php
// カンマまたは " ", \r, \t, \n , \f などの空白文字で句を分割する。
$keywords = preg_split("/[\s,]+/", "code camp, KIDS");
print_r($keywords);
// Array ( [0] => code [1] => camp [2] => KIDS )