<?php
/**
 * 配列の結合(数値配列)
 */
$array1 = [1, 2];
$array2 = [3, 4, 5];

// プラスでの配列結合は、左側が優先されます
// 結果： [[0]=> 1 [1]=> 2 [2]=> 5]
var_dump($array1 + $array2);

// array_mergeでは、数値配列は末尾に要素として追加されます
// 結果： [[0]=> 1 [1]=> 2 [2]=> 3 [3]=> 4 [4]=> 5]
var_dump(array_merge($array1, $array2));

/**
 * 配列の結合(連想配列)
 */
$array3 = ['fruits' => 'apple', 'code' => 'php'];
$array4 = ['fruits' => 'oprange', 'drink' => 'beer'];

// fruitsは重複していますが、左側が優先されます
// 結果： [["fruits"]=> "apple" ["code"]=> "php" ["drink"]=> "beer"]
var_dump($array3 + $array4);

// fruitsは重複していますが、右側が優先されます
// 結果： [["fruits"]=> "oprange" ["code"]=> "php" ["drink"]=> "beer"]
var_dump(array_merge($array3, $array4));
