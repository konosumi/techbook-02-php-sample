<?php
// 名前空間を宣言します。これから定義するクラス(や関数・定数)に住所を与えています
namespace chapter105;

// \chapter105\DateTimeクラスとなる
final class DateTime {
    function __construct()
    {
    }

    public function example()
    {
        return "My DateTime Class";
    }
}

// どちらの書き方でも動きます。
// 1. 現在自分がいる名前空間で定義されているクラスを使う(相対)
$datetime = new DateTime();
echo $datetime->example()."\n<br>";
// 2. 住所をはじめから記述する形式(ルート相対)
$datetime = new \chapter105\DateTime();
echo $datetime->example()."\n<br>";

// 本来のPHPのDateTimeを使う場合は、先頭にバックスラッシュを付けます
$original = new \DateTime();
echo $original->format('Y-m-d H:i:s')."\n<br>";
