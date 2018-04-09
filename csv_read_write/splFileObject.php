<?php
// インプットのCSVのオブジェクトを生成する
$inputFile = new SplFileObject("animals.csv");
// 同じくーアウトプットのCSVのオブジェクトを生成する
$outputFile = new SplFileObject('output_animals.csv', 'w');

// setFlags()関数はSplFileObjectによって使われるフラグをセットする
// READ_CSCはCSV 列として行を読み込む
$inputFile->setFlags(SplFileObject::READ_CSV);
// オブジェクトをforeach構文で回すだけで、fopne()関数を使わなくても1行ずつ読み込むことができる
foreach ($inputFile as $row) {
    list($animal, $legs) = $row;
    // 読み込んだCSVを元に文章を作成する
    $sentence = sprintf("%sの足は%d本ある", $animal, $legs);
    // SplFileObject::fputcsv()関数を使って、optput_animals.csvに書き出す。
    $outputFile->fputcsv([$animal, $legs, $sentence]);
}