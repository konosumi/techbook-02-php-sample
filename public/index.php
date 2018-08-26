<?php
// ルーティング設定の作成(キーと値が同じ配列を作ってます)
$routeConfig = array_combine(routingPath(), routingPath());
// ルーティングはURI(URL)を基に行ないます。
$uri = $_SERVER['REQUEST_URI'];

// ルーティング設定にない、正規のURI(URL)以外を弾きます。
if (!isset($routeConfig[$uri])) {
    header("HTTP/1.0 404 Not Found");
    return;
}

// phpsamplesの下にある、パスに対応したPHPファイルを呼び出します。
$path = realpath(__DIR__.'/../phpsamples'.$routeConfig[$uri].'.php');
if ($path) {
    require($path);
} else {
    // ルーティングを適切にメンテナンスしていれば、ここには来ない
    header("HTTP/1.0 500 Internal Server Error");
    return;
}

// アクセスを受け付けるパスの一覧を返す
function routingPath() {
    return [
        '/phpinfo',
        '/chapter03/s01-typehinting',
        '/chapter03/s02-weakhinting',
        '/chapter03/s03-stronghinting',
        '/chapter03/s04-classandnull',
        '/chapter04/s01-localscope',
        /*
        '/chapter03/s01-declare-error',
        '/chapter03/s02-namespace',
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
        */
    ];
}
