<?php
/**
 * floatの比較が失敗するケース
 * 出典： WEB+DB PRESS Vol.94「PHP初心者がハマりがちな落とし穴」
 */
$float1 = 1.1;
$float2 = 2.2;

// bool(false) bool(false)
var_dump(3.3 == ($float1 + $float2));
var_dump(3.3 === ($float1 + $float2));

// 一般的に、プログラムにおいて小数の扱いは難しいです
// 例えば、1/3は割り切れないので、表現には限界があります
// float(0.33333333333333)
var_dump(1/3);
