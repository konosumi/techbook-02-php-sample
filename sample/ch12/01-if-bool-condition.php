<?php
/**
 * ifでの変数の判定(紙面の都合で、変数には入れずハードコードしてます)
 * 以下の例は、全てfalseと判定されるので、何も出力されません
 */

// booleanのFALSE
if (false) {
    echo "Hit!\n<br>";
}
// intの0とfloatの0.0
if (0 || 0.0) {
    echo "Hit!\n<br>";
}
// 空の文字列と文字列の "0"
if ("" || "0") {
    echo "Hit!\n<br>";
}
// 要素数がゼロの配列
if ([]) {
    echo "Hit!\n<br>";
}
// 特別な値 NULL (値がセットされていない変数を含む)
if (NULL) {
    echo "Hit!\n<br>";
}

// 空のタグから作成された SimpleXML オブジェクト
$xml_string = <<<EOF
<?xml version="1.0" encoding="utf-8" ?>
<image />
EOF;
if (new SimpleXMLElement($xml_string)) {
    echo "Hit!\n<br>";
}
