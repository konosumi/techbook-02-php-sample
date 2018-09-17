<?php
// 弱い型付け
final class SampleWeak
{
    // 整数に"変換できるモノ"しか扱わない
    public static function echoUserIdWeak(int $userId)
    {
        echo "userId=".$userId."\n<br>";
    }
}

// userId=123
SampleWeak::echoUserIdWeak('123abcde');
