<?php

// ルーティング設定
$routingPath = [
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
// Like a ['/chapter01/01' => '/chapter01/01']
$routeConfig = array_combine($routingPath, $routingPath);

$uri = $_SERVER['REQUEST_URI'];
// ルーティング設定に搭載された、正規のURIのみルーティングを実行します
if (isset($routeConfig[$uri])) {
    // 実際のファイルパスは「/var/www/sample/phpsamples/chapter01/03.php」です。
    require_once(__DIR__.'/../phpsamples'.$routeConfig[$uri].'.php');
    return;
}

header("HTTP/1.0 404 Not Found");