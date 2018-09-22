<?php
/**
 * 無名クラス
 */
class BaseBatchController
{
    public function __construct()
    {
        echo 'BaseBatchController: __construct()'.PHP_EOL;
    }

    public function run()
    {
        echo 'BaseBatchController: run()'.PHP_EOL;
    }
}

/**
 * 無名クラスによる即席バッチコントローラー(基盤クラスを継承しています)
 * BaseBatchController: __construct()
 * AnonymousController: __construct()
 */
$controller = new class extends BaseBatchController
{
    public function __construct()
    {
        parent::__construct();
        echo 'AnonymousController: __construct()'.PHP_EOL;
    }

    public function run()
    {
        parent::run();
        echo 'AnonymousController: run()'.PHP_EOL;
    }
};

// BaseBatchController: run()
// AnonymousController: run()
$controller->run();

// オブジェクトのクラス名を取得すると、とても長い名前が返却されます
// class@anonymous/[省略]/06-anonymous-class.php0x101df12ef
echo get_class($controller).PHP_EOL;
