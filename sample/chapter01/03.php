<?php
// 名前空間の階層化
namespace chapter01\sub03;

class Datetime {
    function __construct() { } 
    function example() { return "Datetime class"; }
}

$datetime = new \chapter01\sub03\Datetime();
echo $datetime->example();

