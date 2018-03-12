<?php
preg_match('/(foo)(baz)(\w+)/', 'foobarbazaa', $matches, PREG_OFFSET_CAPTURE);
echo "<pre>";
print_r($matches);
echo "</pre>";
// パターンのデリミタの後の "i" は、大小文字を区別しない検索を示す
if (preg_match("/php/i", "PHP is the web scripting language of choice.")) {
    echo "A match was found.";
} else {
    echo "A match was not found.";
}