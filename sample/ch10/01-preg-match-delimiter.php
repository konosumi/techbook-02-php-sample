<?php
/**
 * 正規表現のデリミタ
 */

// 正規表現のデリミタはスラッシュが多いです
var_dump(preg_match('/^123/', '12345'));

// デリミタは英数字、バックスラッシュ、空白文字以外の任意の文字が可能です
var_dump(preg_match('@^123@', '12345'));
var_dump(preg_match('%^123%', '12345'));

// よく使われるデリミタは、スラッシュ(/)、ハッシュ記号(#)、チルダ(~)です。
var_dump(preg_match('#^/path#', '/path/to/test'));
var_dump(preg_match('~^/path~', '/path/to/test'));
