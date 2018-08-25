<?php

// ルーティング設定
$routePath = [
    '/chapter01/01',
    '/chapter01/02',
    '/chapter01/03',
];
// Like a ['chapter01/01' => 'chapter01/01']
$routeConfig = array_combine($routePath, $routePath);

// ルーティング設定に搭載された、正規のパスである場合のみ画面遷移する
if (isset($routeConfig[$_SERVER['REQUEST_URI']])) {
    require_once('./'.$routeConfig[$_SERVER['REQUEST_URI']].'.php');
    return;
}

header("HTTP/1.0 404 Not Found");