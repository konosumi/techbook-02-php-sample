<?php
// 定義済みチェック
if (isset($_GET['user'])) {
    $username = $_GET['user'];
} else {
    $username = 'nobody';
}

// または三項演算子を用いる
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';