<?php
// ifで変数を単純に比較すると、booleanへ変換されてチェックされる
// SEE: http://php.net/manual/ja/language.types.boolean.php

// 以下の例は、全てfalseと判定されます。

// boolean の FALSE
$val = false;
if ($val) {
    echo "Hit!\n<br>";
}

// integer の 0 (ゼロ)
$val = 0;
if ($val) {
    echo "Hit!\n<br>";
}

// float の 0.0 (ゼロ)
$val = 0.0;
if ($val) {
    echo "Hit!\n<br>";
}

// 空の文字列、 および文字列の "0"
$val = "";
if ($val) {
    echo "Hit!\n<br>";
}
$val = "0";
if ($val) {
    echo "Hit!\n<br>";
}

// 要素の数がゼロである 配列
$val = [];
if ($val) {
    echo "Hit!\n<br>";
}

// 特別な値 NULL (値がセットされていない変数を含む)
$val = NULL;
if ($val) {
    echo "Hit!\n<br>";
}

// 空のタグから作成された SimpleXML オブジェクト
$xml_string = <<<EOF
<?xml version="1.0" encoding="utf-8" ?>
<image />
EOF;

$val = new SimpleXMLElement($xml_string);
if ($val) {
    echo "Hit!\n<br>";
}
