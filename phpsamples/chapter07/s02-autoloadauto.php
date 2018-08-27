<?php
spl_autoload_register(function ($class_name) {
    $basePath = '/var/www/sample/phpsamples/';

    // 名前空間を含めたクラスのパスから、読み込むファイルのパスを自動決定する
    // chapter07\Sample => /var/www/sample/phpsamples/chapter07/Sample.php'
    $autoloadFile = realpath($basePath.implode('/', explode('\\', $class_name)).'.php');

    // strposは、ファイルパスの先頭が$basePathであることを確認しています。
    // 念の為のディレクトリトラバーサル(../../など)対策です。
    if ($autoloadFile && strpos($autoloadFile, $basePath) === 0) {
        include($autoloadFile);
    }
});

// 新しいクラスを読み込みます: chapter07\Sample 
// Welcome to autoload! 
$sample = new \chapter07\Sample;
$sample->hello();
