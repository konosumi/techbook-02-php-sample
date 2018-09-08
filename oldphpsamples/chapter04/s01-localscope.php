<?php
function scope() {
    // ローカルスコープ
    // 関数内で宣言された変数は、関数内でしか生存しません。
    $str = 'abcde';
    return $str;
}
    
scope();
// str is not alive
echo isset($str) ? "str is alive." : "str is not alive.";
