<?php
$float1 = 1.1;
$float2 = 2.2;

// bool(false)
var_dump(3.3 == ($float1 + $float2));
echo "\n<br>";

// bool(false)
var_dump(3.3 === ($float1 + $float2));
echo "\n<br>";

// 1/3は割り切れないから、表現には限界がある
// float(0.33333333333333)
var_dump(1/3);

var_dump(preg_replace('/[あ]/u', 'a', "あいちゃん"));