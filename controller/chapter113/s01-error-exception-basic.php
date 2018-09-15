<?php

try {
    // 0での割り算でエラー例外(DivisionByZeroError)が起きる例
    $result = 0 % 0;
} catch (\Error $e) {
    // DivisionByZeroError
    echo var_dump($e);
    // Modulo by zero
    echo $e->getMessage();
}

try {
    // Warning: Division by zero 
    $result = 0 / 0;
    // Warning: Division by zero 
    $result = 1 / 0;
} catch (\Error $e) {
    // ここには来ない
    // DivisionByZeroErrorは0で割れば発生するわけではなく
    // 主に余りの計算(%)で発生する
    echo var_dump($e);
    echo $e->getMessage();
}
