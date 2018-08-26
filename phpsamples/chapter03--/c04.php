<?php
// 住所が長いと感じたら、エイリアスを定義することで省略できる
use \DateTime as Dtm;
//use \chapter01\DateTime as Ch01Dtm;

$datetime = new Dtm();
echo $datetime->format('Y-m-d H:i:s');
