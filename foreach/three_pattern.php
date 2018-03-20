<?php
$array = [1, 2, 3, 4];

echo "while構文</br>";
$key = 0;
while ($key < count($array)) {
    echo $array[$key] . "</br>";
    $key++;
}

echo "for構文</br>";
for ($key = 0; $key < count($array); $key++) {
    echo $array[$key] . "</br>";
}

echo "foreach構文</br>";
foreach ($array as $key => $value) {
    echo $value . "</br>";
}
?>
