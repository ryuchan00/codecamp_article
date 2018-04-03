<?php
// ロケールを設定します。CSVファイルをUTF-8で読み込みます。
setlocale(LC_ALL, 'ja_JP.UTF-8');

$row = 1;
if (($handle = fopen("test.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "${row}行目のフィールドは${num}個あります。\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo "「${data[$c]}」です。\n";
        }
    }
    fclose($handle);
}
?>

