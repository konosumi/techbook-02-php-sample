<?php

// 関数を定義した場合
function exception_handler($e) {
    echo "Uncaught exception function: " , $e->getMessage(), "\n";
}
set_exception_handler('exception_handler');

// 無名関数を使った場合
// 再度set_exception_handlerを実行すると、既存の登録関数を上書きします。
set_exception_handler(function ($e) {
    // Uncaught exception closure: Modulo by zero
    echo "Uncaught exception closure: " , $e->getMessage(), "\n";
});

if (1 !== 0) {
    // DivisionByZeroErrorの発生
    0 % 0;
}
