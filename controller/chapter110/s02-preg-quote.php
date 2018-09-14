<?php
// preg_quoteによる置換
// SEE: http://php.net/manual/ja/function.preg-quote.php

// 正規表現を想定していない只の文字列とする
$str = 'aa*b*cc';
// "a*b*c"という只の文字列を"d"にする想定です
[$original, $replace] = ["a*b*c","d"];

// なぜかaa*b*ddになってしまう
// 理由は、アスタリスク(*)が正規表現におけるメタ文字だからである
// 結果： aa*b*dd
echo htmlspecialchars(preg_replace('/'.$original.'/', $replace, $str), ENT_QUOTES)."\n<br>";

// 本ケースでにおける"a*b*c"は「0文字以上のaの連続,0文字以上のbの連続,最後にc」となる
// つまり、c単体の一文字でもヒットします
// 結果： d
echo htmlspecialchars(preg_replace('/'.$original.'/', $replace, 'c'), ENT_QUOTES)."\n<br>";

// メタ文字のアスタリスク(*)を、単純な文字として判定したい場合、
// クォートという処理でエスケープすれば可能でです
// 結果：adc
echo htmlspecialchars(preg_replace('/'.preg_quote($original, '/').'/', $replace, $str), ENT_QUOTES)."\n<br>";
