<?php
// preg_quoteによるメタ文字の置換
// SEE: http://php.net/manual/ja/function.preg-quote.php

// 正規表現を想定していない、普通の文字列とする
$str = 'aa*b*cc';
// "a*b*c"という普通の文字列を"d"にする想定
[$word, $replace] = ["a*b*c","d"];

// なぜかaa*b*ddになってしまう
// 理由は、アスタリスク(*)が正規表現におけるメタ文字だからである
// 結果： aa*b*dd
$result = preg_replace('/'.$word.'/', $replace, $str);
echo htmlspecialchars($result, ENT_QUOTES)."\n<br>";

// 本ケースにおける"a*b*c"は
//「0文字以上のaの連続,0文字以上のbの連続,最後にc」というルールである
// つまり、c単体の一文字でもヒットします
// 結果： d
$result = preg_replace('/'.$word.'/', $replace, 'c');
echo htmlspecialchars($result, ENT_QUOTES)."\n<br>";

// メタ文字のアスタリスク(*)ではなく、単純な文字として判定させたい！
// preg_quoteという処理でエスケープすれば可能でです
// 結果：adc
$result = preg_replace('/'.preg_quote($word, '/').'/', $replace, $str);
echo htmlspecialchars($result, ENT_QUOTES)."\n<br>";
