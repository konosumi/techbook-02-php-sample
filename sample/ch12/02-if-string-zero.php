<?php
/**
 * 文字列のゼロ(0)の判定
 */
$val = "0";

// 普通に判定するとヒットしない
if ($val) {
    echo "TRUE!".PHP_EOL;
}
// 文字列として考えて、長さを判定すればヒットする
if (strlen($val) > 0) {
    echo "文字が入力されています".PHP_EOL;
}
