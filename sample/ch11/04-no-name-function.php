<?php
/**
 * 無名関数が活躍する配列関数
 */
$array = [1, 2, 3];
 
// 無名関数(クロージャ)は、配列関数で役に立ちます
// 結果： [[0]=> int(2) [1]=> int(4) [2]=> int(6)]
var_dump(array_map(function($v) { return $v * 2; }, $array));
