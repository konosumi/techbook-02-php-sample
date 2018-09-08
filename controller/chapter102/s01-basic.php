<?php
// 型宣言のサンプルクラス
final class SampleTypeDeclaration
{
    // 特に制限のない普通の関数
    public static function echoUserId($userId)
    {
        $speCharId = htmlspecialchars($userId, ENT_QUOTES, 'UTF-8');
        echo "userId=".$speCharId."\n<br>";
    }

    // 型宣言によって、整数以外を弾く関数
    public static function echoUserIdType(int $userId)
    {
        echo "userId=".$userId."\n<br>";
    }
}

$sampleUserId = 'abcde';

// userId=abcde
SampleTypeDeclaration::echoUserId($sampleUserId);

// Fatal error: Uncaught TypeError: Argument 1 passed to
// SampleTypeDeclaration::echoUserIdType()
// must be of the type integer, string given, called in 
SampleTypeDeclaration::echoUserIdType($sampleUserId);
