<?php
/**
 * filter_varによるフィルタリングの例
 */
$var = filter_var('755x', FILTER_VALIDATE_INT);
// bool(false)
var_dump($var);

// 文字列の'755'が数値の755になる
$var = filter_var('755', FILTER_VALIDATE_INT);
// int(755)
var_dump($var);
