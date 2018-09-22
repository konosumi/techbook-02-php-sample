<?php
/**
 * Null合体演算子
 */

// Null合体演算子(??)は、isset相当の判定を行ないます
$username = $_GET['user'] ?? 'nobody';
// nobody
echo $username.PHP_EOL;
