<?php
// 名前空間の階層化
namespace chapter01\dir03;

// ここで定義したDateTimeクラスは、\chapter01\dir03\DateTimeという住所になります。
class DateTime {
    function __construct() { } 
    function example() { return "The DateTime Class"; }
}

$datetime = new \chapter01\dir03\DateTime();
echo $datetime->example();
