<?php
$val = 0;

// 曖昧比較とは、このような問題です。
// 数値にキャストされたAは0になるので、判定を通過するのです。
// string(9) "Hit if A!"
if ($val == 'A') {
    var_dump("Hit if A!");
}

// switch文では、曖昧比較が行なわれてしまいます
// $val が数値であるため、数値として比較されます
switch ($val) {
    case 'A': 
        // string(6) "Hit A!"
        var_dump("Hit A!");
        break;
    case 0: 
        // 本来ならここに来るはず！
        var_dump("Hit 0!");
        break;
    default: 
        var_dump("No hit.");
        break;
}
