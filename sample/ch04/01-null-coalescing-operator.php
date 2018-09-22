<?php
/**
 * Null合体演算子
 */

// 普通に書くと
if (isset($_GET['user'])) {
    $username = $_GET['user'];
} else {
    $username = 'nobody';
}
// またはこうなる
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';

// Null合体演算子(??)は、isset相当の判定を行ないます
$username = $_GET['user'] ?? 'nobody';
// nobody
echo $username.PHP_EOL;
