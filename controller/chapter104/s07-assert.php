<?php
// assertによる、配列内に想定する添字があることの担保
function assertTest(array $array) {
    assert(array_key_exists('c', $array));
    echo "Assert pass!\n<Br>";
}

// Assert pass!
assertTest([
    "c" => 3,
]);

// Warning: assert(): assert(array_key_exists('c', $array)) failed
assertTest([
    "a" => 1,
    "b" => 2,
]);
