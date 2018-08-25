<?php
// これが名前空間の宣言
namespace chapter01;

class Datetime {
    function __construct() { } 
    function example() { return "Datetime class"; }
}

// どちらの書き方でも動く
$datetime = new Datetime();
//$datetime = new \chapter01\Datetime();
echo $datetime->example();

// 本来のDatetimeを使いたい時は、先頭にバックスラッシュを付ける
$original = new \Datetime();
echo $original->format('Y-m-d H:i:s');
