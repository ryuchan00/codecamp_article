<?php
// 本来は$diceをシャッフルする。
$dice = [2, 5, 6, 1, 3, 4];
foreach ($dice as $value) {
    echo "出た目は $value です" . "</br>";
    if ($value === 6) {
        echo "6 が出たので、終了します。" . "</br>";
        break;
    }
}
?>
