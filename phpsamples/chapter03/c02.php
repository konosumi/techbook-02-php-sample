<?php
// これが名前空間の宣言です。これから定義するクラス(や関数)に住所を与えます。
namespace chapter01;

// ここで定義したDateTimeクラスは、\chapter01\DateTimeという住所になります。
class DateTime {
    function __construct() { } 
    function example() { return "The DateTime Class"; }
}

/**
 * どちらの書き方でも動きます。
 */

// 現在自分がいる名前空間上に定義されているクラスを、そのまま使う形式
$datetime = new DateTime();
echo $datetime->example();

// きっちりと住所を全て記述する形式
$datetime = new \chapter01\DateTime();
echo $datetime->example();

/**
 * 本来のDateTimeを使いたい時は、先頭にバックスラッシュを付けます
 */
$original = new \DateTime();
echo $original->format('Y-m-d H:i:s');
