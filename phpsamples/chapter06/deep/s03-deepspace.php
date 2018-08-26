<?php
// 名前空間の階層化
namespace chapter06\deep;

class DateTime {
    function __construct() { } 
    function example() { return "The DateTime Class"; }
}

// \chapter06\deep\DateTimeという住所で呼び出します。
$datetime = new \chapter06\deep\DateTime();
echo $datetime->example();
