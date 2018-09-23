<?php
// パターン修飾子                                                                
// SEE: http://php.net/manual/ja/reference.pcre.pattern.modifiers.php

// u修飾子を付けないと、「あい」はバイト文字列のような扱いを受け、
// 6文字分の変換がされてしまう
// string(12) "雛鶴aaaaaa" 
var_dump(preg_replace('/[あい]/', 'a', "雛鶴あい"));
echo "\n<br>";

// u (PCRE_UTF8)
// この修正子は、Perl 非互換な PCRE の機能を有効にします。
// パターンと対象文字列は、 UTF-8 として処理されます。 

// 「あい」はそれぞれで1文字として処理されることで、想定した動きに直りました
// string(8) "雛鶴aa" 
var_dump(preg_replace('/[あい]/u', 'a', "雛鶴あい"));
echo "\n<br>";

var_dump(preg_replace('/[𡈽]/', 'a', "𡈽いちゃん"));
