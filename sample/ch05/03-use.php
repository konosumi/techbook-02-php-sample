<?php
/**
 * useによるショートカット
 */
// 住所が長いと感じたら、エイリアスを定義することでショートカットできる
use \DateTime as Dtm;
//use \chapter105\s03\DateTime as Dtm;

$datetime = new Dtm();
// 2018-08-26
echo $datetime->format('Y-m-d');

// おまけ：(PHP7)複数use
// SEE: https://qiita.com/hnw/items/35dc3f54ec3358831cad
/**
 * use Symfony\Component\Console\{
 *   Input\InputInterface,
 *   Input\InputArgument,
 *   Input\InputOption,
 *   Output\OutputInterface,
 *   Output\ConsoleOutputInterface
 *};
 */
