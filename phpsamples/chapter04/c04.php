<?php

// ものすごく長い文字を生成してみる
$str = str_repeat('abcde', 5000000);

// メモリ使用量は約24MBに増えた
echo (memory_get_usage() / 1024 / 1024)."<br>\n";
unset($str);

// 変数が削除されたことで、0.3MBまでメモリ使用量は落ちる
echo (memory_get_usage() / 1024 / 1024)."<br>\n";
