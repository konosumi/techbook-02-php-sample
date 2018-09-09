<?php
// 基盤となるコントローラー
class BaseController
{
    public function __construct()
    {
        echo "BaseController!\n<br>";
    }

    public function dispatch()
    {
        $this->before();
        $this->main();
        $this->after();
    }

    public function before()
    {
        echo "Before Process.\n<br>";
    }

    public function main()
    {
        echo "main Process.\n<br>";
    }

    public function after()
    {
        echo "After Process.\n<br>";
    }
}

// 無名クラスによるコントローラー
// 基盤コントローラーを継承しているため、基盤クラスの関数を使える
$controller = new class extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        echo "Anonymous Controller!\n<br>";
    }

    public function main()
    {
        parent::main();
        echo "Anonymous Controller main process!\n<br>";
    }
};

/**
 * BaseController! 
 * Anonymous Controller! 
 * Before Process. 
 * main Process. 
 * Anonymous Controller main process! 
 * After Process. 
 */
$controller->dispatch();
