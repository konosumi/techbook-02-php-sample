<?php
// 名前空間の階層化
namespace chapter105\s03;

final class DateTime
{
    function __construct()
    {
    } 

    function example()
    {
        return "My DateTime Class";
    }
}

// \chapter105\s03\DateTimeという住所で呼び出します。
$datetime = new \chapter105\s03\DateTime();
echo $datetime->example();
