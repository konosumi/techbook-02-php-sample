<?php
$array = [1, 2, 3];
 
// 無名関数(クロージャ)は、配列関数で役に立つ
// array(3) { [0]=> int(2) [1]=> int(4) [2]=> int(6) }
var_dump(array_map(function($v) { return $v * 2; }, $array));
