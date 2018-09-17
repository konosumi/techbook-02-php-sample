<?php
$array1 = [1, 2];
$array2 = [3, 4, 5];

// プラスでの配列結合は、+の左側が優先され、左側がなければ右側を使用する
// 結果：array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(5) } 
var_dump($array1 + $array2);
echo "<br>";

// array_mergeでは、数値配列は単純に左側の末尾に要素として追加される
// array(5) {
//   [0]=> int(1) [1]=> int(2)
//   [2]=> int(3) [3]=> int(4) [4]=> int(5)
// }
var_dump(array_merge($array1, $array2));
echo "<br>";

$array3 = ['fruits' => 'apple', 'code' => 'php'];
$array4 = ['fruits' => 'oprange', 'programing' => 'perl'];

// fruitsは被っているので、左側が使用される
// array(3) {
//   ["fruits"]=> string(5) "apple"
//   ["code"]=> string(3) "php"
//   ["programing"]=> string(4) "perl"
// } 
var_dump($array3 + $array4);
echo "<br>";

// fruitsは被っているので、右側が使用される
// array(3) {
//   ["fruits"]=> string(7) "oprange"
//   ["code"]=> string(3) "php"
//   ["programing"]=> string(4) "perl"
// }
var_dump(array_merge($array3, $array4));
