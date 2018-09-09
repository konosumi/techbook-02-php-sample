<?php
// まだ読み込みまれていないクラスや関数を使おうとした時に実行される
spl_autoload_register(function ($class_name) {
    echo '新しいクラス(関数)を読み込みます: '.$class_name."\n<br>";

    // クラスの名前空間を含めた住所と実際のファイルの場所を対応させる
    $autoloadConfig = [
        'chapter106\Sample' => __DIR__.'/Sample.php'
    ];

    // クラスが定義されているPHPファイルを読み込むことで、使えるようにする
    if (isset($autoloadConfig[$class_name])) {
        include($autoloadConfig[$class_name]);
    }
});

/**
 * 出力結果
 * 新しいクラスを読み込みます: chapter106\Sample 
 * Welcome to autoload! 
 * Welcome to autoload! 
 */ 
$sample = new \chapter106\Sample();
$sample->hello();
$sample2 = new \chapter106\Sample();
$sample2->hello();
