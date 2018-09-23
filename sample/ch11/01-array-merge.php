<?php
/**
 * 配列の結合
 */

/**
 * 数値配列のケース
 */
$array1 = [1, 2];
$array2 = [3, 4, 5];

// プラスでの配列結合は、左側が優先されます
// 結果： array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(5) }
var_dump($array1 + $array2);

// array_mergeでは、数値配列は末尾に要素として追加されます
// array(5) {
//   [0]=> int(1) [1]=> int(2)
//   [2]=> int(3) [3]=> int(4) [4]=> int(5)
// }
var_dump(array_merge($array1, $array2));

/**
 * 連想配列のケース
 */
$array3 = ['fruits' => 'apple', 'code' => 'php'];
$array4 = ['fruits' => 'oprange', 'programing' => 'perl'];

// fruitsは重複していますが、左側が優先されます
// array(3) {
//   ["fruits"]=> string(5) "apple"
//   ["code"]=> string(3) "php"
//   ["programing"]=> string(4) "perl"
// } 
var_dump($array3 + $array4);

// fruitsは重複していますが、右側が優先されます
// array(3) {
//   ["fruits"]=> string(7) "oprange"
//   ["code"]=> string(3) "php"
//   ["programing"]=> string(4) "perl"
// }
var_dump(array_merge($array3, $array4));
