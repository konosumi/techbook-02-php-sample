<?php
$a = 1;
$b = 2;

//a is 1 
echo "a is {$a}\n<br>";
//b is 2 
echo "b is {$b}\n<br>";

// 今までのやり方
//list($a, $b) = [$b, $a];

// 左辺にも配列定義で使う括弧を使えるよになった
// 変数間の値の交換
[$a, $b] = [$b, $a];

// a is 2 
echo "a is {$a}\n<br>";
// b is 1
echo "b is {$b}\n<br>";
