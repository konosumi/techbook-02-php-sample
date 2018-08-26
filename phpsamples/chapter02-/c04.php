<?php
// 強い型付けを使用する
declare(strict_types=1);

class SampleHinting {
    // 数値しか扱わない
    static function echoUserIdTypeHinting(int $id) {
        echo "userId=".$id."\n<br>";
    }
}

$sampleId = '1';
// Fatal error: Uncaught TypeError: Argument 1 passed to
// SampleHinting::echoUserIdTypeHinting()
// must be of the type integer, string given, called 
SampleHinting::echoUserIdTypeHinting($sampleId);
