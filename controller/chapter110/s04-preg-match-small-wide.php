<?php
$str = "abcccde";

// アスタリスク(*)だと最短マッチになる
preg_match('/(c*)/', $str, $match);
// array(2) { [0]=> string(0) "" [1]=> string(0) "" }
var_dump($match);

// プラス(+)だと最長マッチになる
preg_match('/(c+)/', $str, $match);
// array(2) { [0]=> string(3) "ccc" [1]=> string(3) "ccc" 
var_dump($match);
