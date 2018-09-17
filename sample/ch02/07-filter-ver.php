<?php
$var = filter_var('755x', FILTER_VALIDATE_INT);
// bool(false)
var_dump($var);

$var = filter_var('755', FILTER_VALIDATE_INT);
// int(755)
var_dump($var);
