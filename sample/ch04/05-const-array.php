<?php
/**
 * 定数配列
 */
define('FOO', [
    'program' => 'php',
    'fruits' => 'apple'
]);

// php
echo FOO['program'].PHP_EOL;

// 実際の現場では、クラス定数をよく使います
class SampleConst {
    const FOO = [
        'program' => 'php',
        'fruits' => 'apple'
    ];

    /**
     * PHP7.1以降では、クラス定数にアクセス権限を指定することができます
     */
    public const PROGRAM = 'php';
    private const FRUITS = 'apple';
}

// apple
echo SampleConst::FOO['fruits'].PHP_EOL;

// php
echo SampleConst::PROGRAM.PHP_EOL;
// Fatal error: Uncaught Error:
// Cannot access private const SampleConst::FRUITS
echo SampleConst::FRUITS.PHP_EOL;
