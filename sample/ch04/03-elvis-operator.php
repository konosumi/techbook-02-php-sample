<?php
/**
 * エルビス演算子
 */

$name = "";

// 普通に書くと
if ($name) {
    $username = $name;
} else {
    $username = '名前が空です';
}
// またはこうなる
$username = $name ? $name : '名前が空です';

// if($name)と同様の評価をし、あれば$name、なければデフォルト値を返却します。
$username = $name ?: '名前が空です';
// 名前が空です
echo $username.PHP_EOL;
