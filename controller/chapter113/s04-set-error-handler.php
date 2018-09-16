<?php
// 扱いづらいPHPのエラー処理を適当にいなす
// SEE: https://uzulla.hateblo.jp/entry/2013/12/20/041619

// 無名関数を使った場合
// 再度set_exception_handlerを実行すると、既存の登録関数を上書きします。
set_exception_handler(function ($e) {
    // Uncaught exception closure:
    // Use of undefined constant abcde - assumed 'abcde' 
    echo "Uncaught exception closure: " , $e->getMessage(), "\n<br>";
});

// エラー時に例外をスローするようにコールバック関数を登録
set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    var_dump("ここに来ました");
    throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
});

// 未定義の定数を使用している
// ここで起きたエラーが、set_error_handlerで例外に変換されて
// 最終的に例外ハンドラに渡されている流れを体験してみよう
abcde;
