<?php
// 以下の例は、いずれもマッチします。
// SEE: http://php.net/manual/ja/regexp.reference.delimiters.php

// 正規表現のデリミタはスラッシュが多いです
var_dump(preg_match('/^1/', '12345'));

// デリミタは英数字、バックスラッシュ、空白文字以外の任意の文字が可能です
var_dump(preg_match('@^1@', '12345'));

// よく使われるデリミタは、スラッシュ(/)、ハッシュ記号(#)、チルダ(~)です。
// デリミタを変更すれば、スラッシュをエスケープしないで正規表現内で使えます
var_dump(preg_match('#^/path#', '/path/to/test'));
var_dump(preg_match('~^/path~', '/path/to/test'));
