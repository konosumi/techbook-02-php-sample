<?php
// 定数配列
define('FOO', [
    'bar' => 'baz',
    'bat' => 'qux'
]);

// baz
echo FOO['bar']."\n<br>";

class ConstSample {
    const FOO = [
        'bar' => 'baz',
        'bat' => 'qux'
    ];
}

// qux 
echo ConstSample::FOO['bat']."\n<br>";
