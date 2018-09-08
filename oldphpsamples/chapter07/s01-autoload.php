<?php
// まだ読み込みまれていないクラスや関数を使おうとした時に実行される関数を登録する
spl_autoload_register(function ($class_name) {
    echo '新しいクラスを読み込みます: ', $class_name."\n<br>";

    $autoloadConfig = [
        // サンプルクラスは同じ階層のSample.phpに定義しています
        'chapter07\\Sample' => __DIR__.'/Sample.php'
    ];
    if (isset($autoloadConfig[$class_name])) {
        // クラスが定義されているPHPファイルを読み込むことで、使えるようにする
        include($autoloadConfig[$class_name]);
    }
});

/**
 * 出力結果
 * 新しいクラスを読み込みます: chapter07\Sample 
 * Welcome to autoload! 
 * Welcome to autoload! 
 */ 
$sample = new \chapter07\Sample;
$sample->hello();
$sample2 = new \chapter07\Sample;
$sample->hello();
