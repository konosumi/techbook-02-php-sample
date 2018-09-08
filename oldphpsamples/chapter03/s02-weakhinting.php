<?php
class SampleHinting {
    // 整数に"変換できるモノ"しか扱わない
    public static function echoUserIdTypeHinting(int $userId) {
        echo "userId=".$userId."\n<br>";
    }
}

// userId=123
SampleHinting::echoUserIdTypeHinting('123abcde');
