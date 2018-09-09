<?php
spl_autoload_register(function ($class_name) {
    // controller下のファイルを自動読み込みするオートロードを作ってみます。
    // (つまり、今いる場所の１回層上のディレクトリを起点とする)
    $ds = DIRECTORY_SEPARATOR;
    $basePath = realpath(__DIR__.$ds.'..');

    // 名前空間を含めたクラスのパスから、読み込むファイルのパスを自動決定する
    // 名前空間はバックスラッシュで区切られているので、
    // それをパスに置き換えてあげるとファイルパスになるという作戦です。
    $autoloadFile = realpath($basePath.$ds
        .implode($ds, explode('\\', $class_name)).'.php');

    // strposは、ファイルパスの先頭が$basePathであることを確認しています。
    // 念の為のディレクトリトラバーサル(不正な../../などの検知)対策です。
    if ($autoloadFile && strpos($autoloadFile, $basePath) === 0) {
        // controller/chapter106/Sample.phpのようなパスになっています。
        // var_dump($autoloadFile);
        include($autoloadFile);
    }
});

// Welcome to autoload! 
$sample = new \chapter106\Sample();
$sample->hello();
