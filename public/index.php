<?php
// ルーティング設定
// キーと値が同じ配列を作る => ['/chapter01/01' => '/chapter01/01']
$routeConfig = array_combine(routingPath(), routingPath());
$uri = $_SERVER['REQUEST_URI'];

// ルーティング設定に搭載された、正規のURI以外を弾きます。
if (!isset($routeConfig[$uri])) {
    header("HTTP/1.0 404 Not Found");
    return;
}

// "/var/www/sample/phpsamples/phpinfo.php"のようなパスになります。
//var_dump(realpath(__DIR__.'/../phpsamples'.$routeConfig[$uri].'.php'));

// phpsamplesの下にある、パスに対応したPHPファイルを呼び出します。
// ルーティングエンジンのリストに載っているパスに限定されているため、安全に呼び出すことができます。
require(__DIR__.'/../phpsamples'.$routeConfig[$uri].'.php');

// アクセスを受け付けるパスの一覧を返す
function routingPath() {
    return [
        '/phpinfo',
        '/chapter01/c01',
        '/chapter01/c02',
        '/chapter01/c03/c03',
        '/chapter01/c04',
        '/chapter02/c01',
        '/chapter02/c02',
        '/chapter02/c03',
        '/chapter02/c04',
        '/chapter02/c05',
        '/chapter03/c01',
        '/chapter03/c02', 
        '/chapter03/c03',
        '/chapter04/c01',
        '/chapter04/c02',
        '/chapter04/c03',
        '/chapter04/c04',
    ];
}