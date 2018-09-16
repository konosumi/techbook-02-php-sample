<?php

// 関数を定義した場合
function exception_handler($e) {
    echo "Uncaught exception function: " , $e->getMessage(), "\n<br>";
}
set_exception_handler('exception_handler');

// 無名関数を使った場合
// 再度set_exception_handlerを実行すると、既存の登録関数を上書きします。
set_exception_handler(function ($e) {
    // Uncaught exception closure: Modulo by zero
    echo "Uncaught exception closure: " , $e->getMessage(), "\n<br>";
});

// シャットダウンハンドラ
// プログラムが終了する前に呼ばれます。
register_shutdown_function(function () {
    // 呼び出されるタイミングは、例外ハンドラより後です。
    echo "Program is shutting down.";

    // error_get_last()は、最後に起きたエラーを取得する関数です。
    // これで、プログラムが正常だったのかが分かります。
    // 但し、例外ハンドラを登録している場合、そっちで処理されてしまいます。
    // 実はこれはNULLになります。例外ハンドラの登録をやめると表示されるので、
    // 試してみてください。
    var_dump(error_get_last());
});

if (1 !== 0) {
    // DivisionByZeroErrorの発生
    0 % 0;
}
