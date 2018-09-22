<?php
/**
 * assertの進化
 */
// assertに失敗したら例外をスローする設定
ini_set('assert.exception', 1);

// 配列内に想定する添字があることの担保
// PHPの配列の型宣言が、あまり役に立たない弱点を補ってみる
function assertArray(array $array) {
    assert(array_key_exists('c', $array));
    echo 'Assert pass!'.PHP_EOL;
}

// Assert pass!
assertArray([
    "c" => 3,
]);

// Fatal error: Uncaught AssertionError:
// assert(array_key_exists('c', $array)) 
assertArray([
    "a" => 1,
    "b" => 2,
]);
