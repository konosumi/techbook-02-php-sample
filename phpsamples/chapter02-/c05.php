<?php
class SampleHinting {
    // クラスインスタンスも型宣言することができる
    static function echoDate(\DateTime $datetime) {
        echo $datetime->format('Y-m-d');
    }
}

// 2018-08-25
SampleHinting::echoDate(new \DateTime());
// Fatal error: Uncaught TypeError: Argument 1 passed to
// SampleHinting::echoDate()
// must be an instance of DateTime, string given
SampleHinting::echoDate("test");
