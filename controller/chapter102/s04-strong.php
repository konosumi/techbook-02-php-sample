<?php
// 強い型付けの使用を宣言する
// 強い型付けを利用したいファイルの先頭に、毎回宣言する必要があります。
declare(strict_types=1);

final class SampleStrong
{
    // 厳密な整数しか扱わない
    public static function echoUserIdStrong(int $userId)
    {
        echo "userId=".$userId."\n<br>";
    }
}

// userId=123
SampleStrong::echoUserIdStrong(123);

// Fatal error: Uncaught TypeError: Argument 1 passed to
// SampleStrong::echoUserIdStrong() must be of the type integer,
// string given, called in 
SampleStrong::echoUserIdStrong('123abcde');
SampleStrong::echoUserIdStrong('123');
