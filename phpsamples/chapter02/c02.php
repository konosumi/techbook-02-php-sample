<?php
class Sample {
    // どんな変数でも受け入れる
    static function echoUserId($id) {
        echo "userId=".$id."\n<br>";
    }

    // 数値しか受け付けない
    static function echoUserIdTypeHinting(int $id) {
        echo "userId=".$id."\n<br>";
    }
}

$sampleId = '123abcde';

// userId=abcde
Sample::echoUserId($sampleId);

// userId=123
Sample::echoUserIdTypeHinting($sampleId);
