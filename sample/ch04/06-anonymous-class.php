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
