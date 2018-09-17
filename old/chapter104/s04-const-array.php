<?php
// 定数配列
define('FOO', [
    'bar' => 'baz',
    'bat' => 'qux'
]);

// baz
echo FOO['bar']."\n<br>";

// 但し、実際の現場ではクラス定数による定義をよく使います
class SampleConst {
    const FOO = [
        'bar' => 'baz',
        'bat' => 'qux'
    ];

    // PHP7.1以降では、アクセス権限も指定することができます
    public const BAR = 'bar';
    private const BAZ = 'baz';
}

// qux 
echo SampleConst::FOO['bat']."\n<br>";

// bar
echo SampleConst::BAR."\n<br>";
// Fatal error: Uncaught Error:
// Cannot access private const SampleConst::BAZ
echo SampleConst::BAZ."\n<br>";
