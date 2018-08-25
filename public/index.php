<?php

// ルーティング設定
$routingPath = [
    '/chapter01/01',
    '/chapter01/02',
    '/chapter01/03',
];
// Like a ['/chapter01/01' => '/chapter01/01']
$routeConfig = array_combine($routingPath, $routingPath);

$uri = $_SERVER['REQUEST_URI'];
// ルーティング設定に搭載された、正規のURIのみルーティングを実行します
if (isset($routeConfig[$uri])) {
    // 実際のファイルパスは「/var/www/sample/sample/chapter01/03.php」です。
    require_once(__DIR__.'/../sample'.$routeConfig[$uri].'.php');
    return;
}

header("HTTP/1.0 404 Not Found");