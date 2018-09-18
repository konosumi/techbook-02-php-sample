<?php
/**
 * Null合体演算子
 */
// issetを使わずに、簡潔に初期値を代入することができる
$username = $_GET['user'] ?? 'nobody';
// nobody
echo $username.PHP_EOL;
