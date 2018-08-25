<?php
// ルーティング設定
// array_combineは、キーと値が同じ配列を作っているだけです。
$routeConfig = array_combine(routingPath(), routingPath());
$uri = $_SERVER['REQUEST_URI'];

// ルーティング設定に搭載された、正規のURL(URI)以外を弾きます。
if (!isset($routeConfig[$uri])) {
    header("HTTP/1.0 404 Not Found");
    return;
}

// phpsamplesの下にある、パスに対応したPHPファイルを呼び出します。
// 呼び出しは、ルーティングエンジンに掲載されているパス(PHPファイル)に限定します。
$path = realpath(__DIR__.'/../phpsamples'.$routeConfig[$uri].'.php');
if ($path) {
    require($path);
} else {
    // ルーティングを適切にメンテナンスしていれば、ここにくることはない
    header("HTTP/1.0 500 Internal Server Error");
    return;
}

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
