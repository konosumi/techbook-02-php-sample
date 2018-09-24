<?php
/**
 * エラーハンドラ
 */
set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    echo 'ERROR: ', $errno, ' : ', $errstr, PHP_EOL;
});

// 未定義の定数を使用してみる
// ERROR: 8 : Use of undefined constant ABCDE - assumed 'ABCDE'
ABCDE;
