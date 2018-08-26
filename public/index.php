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
        // 型宣言
        '/chapter03/s01-typehinting',
        '/chapter03/s02-weakhinting',
        '/chapter03/s03-stronghinting',
        '/chapter03/s04-classandnull',
        // 変数のスコープ
        '/chapter04/s01-localscope',
        // 新しい演算子
        '/chapter05/s01-nulloperator',
        '/chapter05/s02-elvisoperator',
        '/chapter05/s03-compareoperator',
    ];
}
