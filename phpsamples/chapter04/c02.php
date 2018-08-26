<?php
function scope() {
    // ローカルスコープ
    // 関数内で宣言された変数は、関数内でしか生存しない
    $str = 'abcde';
    return $str;
}
    
scope();
// 何も表示されない
echo $str;
