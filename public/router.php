<?php
// ルーティング設定
$routerConfig = [
    '/phpinfo' => '/phpinfo'
];
// ルーティングはURIを基に判定します
$uri = $_SERVER['REQUEST_URI'];

// ルーティング設定に存在しない不正なURIを弾きます。
if (!isset($routerConfig[$uri])) {
    header("HTTP/1.0 404 Not Found");
    return;
}

// controllerの下にある、パスに対応したPHPファイルを呼び出します。
$basePath = __DIR__.'/../controller';
$ctrlPath = realpath($basePath.$routerConfig[$uri].'.php');
if ($ctrlPath) {
    require($ctrlPath);
} else {
    // ルーティング設定をメンテナンスしていれば、来ることはない
    header("HTTP/1.0 500 Internal Server Error");
    return;
}
