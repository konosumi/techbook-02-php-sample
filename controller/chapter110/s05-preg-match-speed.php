<?php
$str = 'abcde';
$match = 'bcd';

$time = microtime(true);
for($i = 0; $i < 1000000; $i++) {
    // $matchが含まれているかどうか
    if (preg_match('/'.$match.'/', $str)) {
        // echo 'Hit!';
    }
}
// preg_match:0.23271107673645 
echo 'preg_match:'.(microtime(true) - $time)."\n<br>";

$time = microtime(true);
for($i = 0; $i < 1000000; $i++) {
    // $matchが含まれているかどうか(文字の位置を調べている)
    if (strpos('/'.$match.'/', $str) !== false) {
        // echo 'Hit!';
    }
}
// strpos:0.13181400299072 
echo 'strpos:'.(microtime(true) - $time)."\n<br>";
