<?php
$mixArray = [1, 2, 'fruits' => 'apple', 'code' => 'php'];

// array(4) {
//   [0]=> int(1) [1]=> int(2)
//   ["fruits"]=> string(5) "apple" ["code"]=> string(3) "php"
// } 
var_dump($mixArray);
echo "<br>";

// 通常の配列だと思って安易に扱ってしまうと、思わぬトラブルが起きる可能性がある
for ($i = 0; $i < 4; $i++) {
    // int(1) int(2) NULL NULL NULL
    var_dump($mixArray[$i]);
}
