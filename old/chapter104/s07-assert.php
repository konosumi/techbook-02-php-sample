<?php
// assertに失敗したら例外をスローする
ini_set('assert.exception', 1);

// assertによる、配列内に想定する添字があることの担保
function assertTest(array $array) {
    assert(array_key_exists('c', $array));
    echo "Assert pass!\n<Br>";
}

// Assert pass!
assertTest([
    "c" => 3,
]);

// Fatal error: Uncaught AssertionError:
// assert(array_key_exists('c', $array)) 
assertTest([
    "a" => 1,
    "b" => 2,
]);
