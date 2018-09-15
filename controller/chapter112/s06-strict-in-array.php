<?php
$value = 0;

// bool(true)
var_dump(in_array($value, ['A', 'B', 'C']));
echo "\n<br>";

// bool(false)
var_dump(in_array($value, ['A', 'B', 'C'], true));                              
echo "\n<br>";
