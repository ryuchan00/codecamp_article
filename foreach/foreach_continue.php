<?php
// 本来は$diceをシャッフルする。
$dice = [2, 5, 6, 1, 3, 4];
foreach ($dice as $value) {
    //
    if ($value % 2 !== 0) {
        continue;
    }
    echo "出た目は $value です" . "</br>";
}
?>
