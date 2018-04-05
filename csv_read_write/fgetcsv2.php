<?php
// 文字化け対策
//$tempCSV = file_get_contents($csvFile);
// 文字エンコードをUTF-8に変換します
//$tempCSV = mb_convert_encoding($tempCSV, 'UTF¥8','CP932')

// ロケールを設定します。CSVファイルをUTF-8で読み込みます。
//setlocale(LC_ALL, 'ja_JP.UTF-8');

$row = 1;
if (($handle = fopen("test.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle))) {
        echo "${row}行目\n";
        $row++;
        foreach ($data as $value) {
            echo "「${value}」\n";
        }
    }
    fclose($handle);
}
?>

