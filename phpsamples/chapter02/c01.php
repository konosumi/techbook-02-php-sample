<?php
class SampleHinting {
    // どんな変数でも受け入れる
    static function echoUserId($userId) {
        echo "userId=".htmlspecialchars($userId)."\n<br>";
    }

    // 数値しか受け付けない
    static function echoUserIdTypeHinting(int $userId) {
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
