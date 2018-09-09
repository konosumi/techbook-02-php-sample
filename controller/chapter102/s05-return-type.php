<?php
declare(strict_types=1);
// 戻り値の型宣言
final class SampleReturnType
{
    // 整数、もしくはNULLを返却する関数であることを宣言しています
    public static function addNumberReturn(int $number): ?int
    {
        // 正常に動く
        if ($number === 1) {
            return null;
        }
        // 正常に動く
        if ($number === 2) {
            return $number + 1;
        }

        // 戻り値が数値でないのでエラーになる
        return false;
    }
}

// 何も表示されない(NULLが表示される)
echo SampleReturnType::addNumberReturn(1)."\n<br>";
// 3が表示される
echo SampleReturnType::addNumberReturn(2)."\n<br>";

// Fatal error: Uncaught TypeError: Return value of
// SampleReturnType::addNumberReturn()
// must be of the type integer or null, boolean returned in 
echo SampleReturnType::addNumberReturn(3)."\n<br>";
