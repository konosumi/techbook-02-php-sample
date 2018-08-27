<?php
class BatchBase {
    function run() {
        echo "Run1!\n<br>";
    }
}

// 無名クラス
// なんと継承まで出来る
$batch = new class extends BatchBase {
    function run() {
        parent::run();
        echo "Run2!\n<br>";
    }
};

// Run1! 
// Run2! 
$batch->run();
