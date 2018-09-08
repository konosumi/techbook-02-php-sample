<?php
class SampleHinting {
    // 普通の関数、自由に引数を受け入れます。
    public static function echoUserId($userId) {
        echo "userId=".htmlspecialchars($userId, ENT_QUOTES)."\n<br>";
    }

    // 整数を受け取ります。
    public static function echoUserIdTypeHinting(int $userId) {
        echo "userId=".$userId."\n<br>";
    }
}

$sampleUserId = 'abcde';
// userId=abcde
SampleHinting::echoUserId($sampleUserId);

// Fatal error: Uncaught TypeError: Argument 1 passed to
// SampleHinting::echoUserIdTypeHinting()
// must be of the type integer, string given, called 
SampleHinting::echoUserIdTypeHinting($sampleUserId);
