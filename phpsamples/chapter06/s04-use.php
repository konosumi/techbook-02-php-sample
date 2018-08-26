<?php
// 住所が長いと感じたら、エイリアスを定義することでショートカットできる
use \DateTime as Dtm;
//use \chapter06\deep\DateTime as Ch06Dtm;

$datetime = new Dtm();
// 2018-08-26
echo $datetime->format('Y-m-d');
