<?php
// 強い型付けを使用する
declare(strict_types=1);

class SampleHinting {
    // 整数しか扱わない
    public static function echoUserIdTypeHinting(int $userId) {
        echo "userId=".$userId."\n<br>";
    }
}

// Fatal error: Uncaught TypeError: Argument 1 passed to
// SampleHinting::echoUserIdTypeHinting()
// must be of the type integer, string given, called 
SampleHinting::echoUserIdTypeHinting('123abcde');
