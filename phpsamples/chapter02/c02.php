<?php
class SampleHinting {
    // 数値に"変換できるモノ"しか扱わない
    static function echoUserIdTypeHinting(int $id) {
        echo "userId=".$id."\n<br>";
    }
}

$sampleId = '123abcde';
// userId=123
SampleHinting::echoUserIdTypeHinting($sampleId);
