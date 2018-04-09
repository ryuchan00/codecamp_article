<?php

$fields = [$_POST['column1'], $_POST['column2']];

$fp = fopen('file2.csv', 'w');

fputcsv($fp, $fields);

fclose($fp);