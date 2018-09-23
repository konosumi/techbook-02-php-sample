<?php
/**
 * preg_quoteによるメタ文字の置換
 */

// 正規表現を想定していない、普通の文字列であるとする
$str = 'aa*b*cc';
// "a*b*c"という文字列を"d"にする構想
[$word, $replace] = ["a*b*c","d"];

// 結果がaa*b*ddになってしまう例
// 理由は、アスタリスク(*)が正規表現におけるメタ文字だからです
$result = preg_replace('/'.$word.'/', $replace, $str);
echo $result.PHP_EOL;

// メタ文字のアスタリスク(*)ではなく、単純な文字として判定させます
// 結果：adc
$result = preg_replace('/'.preg_quote($word, '/').'/', $replace, $str);
echo $result.PHP_EOL;
