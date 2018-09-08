<?php
class SampleClassTypeDeclaration
{
    // クラスインスタンス(オブジェクト)も型宣言することができる
    public static function echoDate(DateTime $datetime)
    {
        echo $datetime->format('Y-m-d')."\n<br>";
    }

    // 型宣言の先頭にはてなマーク(?)を付けると、NULL値も許容します。
    // NULL、もしくはDateTimeという型宣言になります。
    public static function echoDateOrNull(?DateTime $datetime)
    {
        if ($datetime) {
            echo $datetime->format('Y-m-d');
        }
        echo "\n<br>";
    }
}

// 2018-08-25
SampleClassTypeDeclaration::echoDate(new DateTime());

// 日付は出力されない
SampleClassTypeDeclaration::echoDateOrNull(null);

// Uncaught TypeError: Argument 1 passed to
// SampleClassTypeDeclaration::echoDate()
// must be an instance of DateTime, string given, called 
SampleClassTypeDeclaration::echoDate("test");
