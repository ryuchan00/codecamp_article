<?php
// 本文
$message = "Line 1\r\nLine 2\r\nLine 3";

// 1 行が 70 文字を超える場合のため、wordwrap() を用いる
$message = wordwrap($message, 70, "\r\n");

// 送信する
mail('leo0210leo@gmail.com', 'My Subject', $message);