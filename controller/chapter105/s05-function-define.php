<?php
namespace chapter105;

// 関数の名前空間の応用
function sample(){
    echo "Sample function!\n<br>";
}

// 定数の名前空間への応用
// 但し、constはクラスの中で定義する方が良いと思う。
const SAMPLE_DEFINE = "Sample define!\n<br>";

// 関数の名前空間経由での呼び出し
\chapter105\sample();
// 定数の名前空間経由での呼び出し
echo \chapter105\SAMPLE_DEFINE;
