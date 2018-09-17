<?php
/**
 * 弱い型付けのサンプル
 */
final class SampleWeak
{
    // 整数に"変換できるモノ"だけ扱います。
    public static function echoUserIdWeak(int $userId)
    {
        echo "userId=".$userId.PHP_EOL;
    }
}

// 123abcdeが123に変換された
// userId=123
SampleWeak::echoUserIdWeak('123abcde');
