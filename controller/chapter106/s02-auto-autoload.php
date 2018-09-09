<?php
spl_autoload_register(function ($class_name) {
    // controller下のファイルを自動読み込みするオートロードを作ってみます。
    // (つまり、今いる場所の１回層上のディレクトリを起点とする)
    $basePath = __DIR__.'../';
    $ds = DIRECTORY_SEPARATOR;

    // 名前空間を含めたクラスのパスから、読み込むファイルのパスを自動決定する
    // 名前空間はバックスラッシュで区切られているので、
    // それをパスに置き換えてあげるとファイルパスになるという作戦です。
    $autoloadFile = realpath($basePath.implode($ds, explode('\\', $class_name)).'.php');

    // strposは、ファイルパスの先頭が$basePathであることを確認しています。
    // 念の為のディレクトリトラバーサル(../../など)対策です。
    if ($autoloadFile && strpos($autoloadFile, $basePath) === 0) {
        // controller/chapter106/Sample.php;
        include($autoloadFile);
    }
});

// 新しいクラスを読み込みます: \chapter106\Sample 
// Welcome to autoload! 
$sample = new \chapter106\Sample();
$sample->hello();
