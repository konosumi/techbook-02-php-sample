<?php
/**
 * 数値配列と連想配列は混在できる
 */
$mixArray = [1, 2, 'fruits' => 'apple', 4];

// [[0]=> 1 [1]=> 2 ["fruits"]=> "apple" [2]=> 4
var_dump($mixArray);

// 数値配列だと思って扱うと、思わぬトラブルが起きる可能性がある
$count = count($mixArray);
for ($i = 0; $i < $count; $i++) {
    // 連想配列の部分だけは、正しく取得できない
    // int(1) int(2) int(4) NULL
    var_dump($mixArray[$i]);
}
