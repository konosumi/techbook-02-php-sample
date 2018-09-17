<?php
// 普通に文字列のゼロを判定するとヒットしない
$val = "0";
if ($val) {
    echo "Hit!\n<br>";
}

// 文字列として考えて、中身があるかどうかを判定すればヒットする
if (strlen($val) > 0) {
    echo "Hit Zero!\n<br>";
}
