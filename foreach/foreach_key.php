<?php
$vegetabels_color = [
    'tomato' => 'red',
    'lettuce' => 'green',
    'potato' => 'brown'
];
foreach ($vegetabels_color as $name => $color) {
    echo "$name の色は $color です" . "</br>";
}
echo "最後の野菜は $name であり、色は $color です" . "</br>";
?>