<?php
$email = 'name@example.com';
$domain = strstr($email, '@');
echo $domain . "</br>"; // @example.com と表示します

// 第三引数を指定して、検索したいワードより前の部分を返す
$user = strstr($email, '@', true);
echo $user . "</br>"; // name と表示します
