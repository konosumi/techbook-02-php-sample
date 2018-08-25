<?php
// 住所が長いと感じたら省略できる
use \DateTime as Dtm;
//use \chapter01\DateTime as Ch01Dtm;


// 現在自分がいる名前空間上に定義されているクラスを、そのまま使う形式
$datetime = new Dtm();
echo $datetime->format('Y-m-d H:i:s');