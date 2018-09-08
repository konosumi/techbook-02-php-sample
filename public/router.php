<?php
// ルーティング設定の作成(キーと値が同じ配列を作ってます)
$routerConfig = array_combine(routingPath(), routingPath());
// ルーティングはURIを基に行ないます。
$uri = $_SERVER['REQUEST_URI'];

// ルーティング設定に存在しない、不正なURIを弾きます。
if (!isset($routerConfig[$uri])) {
    header("HTTP/1.0 404 Not Found");
    return;
}

// controllerの下にある、パスに対応したPHPファイルを呼び出します。
$controllerPath = realpath(__DIR__.'/../controller'.$routerConfig[$uri].'.php');
if ($controllerPath) {
    require($controllerPath);
} else {
    // ルーティングのパス一覧を適切にメンテナンスしていれば、ここに来ることはない
    header("HTTP/1.0 500 Internal Server Error");
    return;
}

// アクセスを受け付けるパス一覧を返す
function routingPath() {
    return [
        '/phpinfo',
        /*
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
        '/chapter05/s04-constantarray',
        '/chapter05/s05-anonymousclass',
        // 名前空間
        '/chapter06/s01-declareerror',
        '/chapter06/s02-namespace',
        '/chapter06/deep/s03-deepspace',
        '/chapter06/s04-use',
        // オートロード
        '/chapter07/s01-autoload',
        '/chapter07/s02-autoloadauto',
        // コンポーザー
        '/chapter08/s01-naokihanzawa',
        */
    ];
}
