<?php
// ルーティング設定の作成(キーと値が同じ配列を作るだけです)
$routerConfig = array_combine(routingPath(), routingPath());
// ルーティングはURIを基に判定します
$uri = $_SERVER['REQUEST_URI'];

// ルーティング設定にない、不正なURIを弾きます。
if (!isset($routerConfig[$uri])) {
    header("HTTP/1.0 404 Not Found");
    return;
}

// controllerの下にある、パスに対応したPHPファイルを呼び出します。
$contBasePath = __DIR__.'/../controller';
$contPath = realpath($contBasePath.$routerConfig[$uri].'.php');
if ($contPath) {
    require($contPath);
} else {
    // パス一覧をメンテナンスしていれば、来ることはない
    header("HTTP/1.0 500 Internal Server Error");
    return;
}

// ルーティングで受け付けるパス一覧を返す
function routingPath()
{
    return [
        '/phpinfo',
        // 型宣言
        '/chapter102/s01-basic',
        '/chapter102/s02-instance-or-null',
        '/chapter102/s03-weak',
        '/chapter102/s04-strong',
        '/chapter102/s05-return-type',
        '/chapter102/s06-try-catch',
        // 変数のスコープ
        '/chapter103/s01-local-scope',
        // 新しい演算子
        '/chapter104/s01-null-operator',
        '/chapter104/s02-elvis-operator',
        '/chapter104/s03-compare-operator',
        '/chapter104/s04-const-array',
        '/chapter104/s05-anonymous-class',
        '/chapter104/s06-list-array',
        '/chapter104/s07-assert',
        // 名前空間
        '/chapter105/s01-declare-error',
        '/chapter105/s02-namespace',
        '/chapter105/s03/deep-namespace',
        '/chapter105/s04-use',
        '/chapter105/s05-function-define',
        // オートロード
        '/chapter106/s01-autoload',
        '/chapter106/s02-auto-autoload',
        // コンポーザー
        '/chapter107/s01-naoki-hanzawa',
        // 正規表現
        '/chapter110/s01-preg-match-delimiter',
        '/chapter110/s02-preg-quote',
        '/chapter110/s03-preg-match-multi',
        '/chapter110/s04-preg-match-small-wide',
        '/chapter110/s05-preg-match-speed',
        // 配列
        '/chapter111/s01-array-merge',
        '/chapter111/s02-array-mix',
        '/chapter111/s03-no-name-function',
    ];
}
