<?php
/**
 * in_arrayにおける緩やかな比較と厳密な比較
 */
$value = 0;

// 緩やかな比較
// bool(true)
var_dump(in_array($value, ['A', 'B', 'C']));

// 厳密な比較
// bool(false)
var_dump(in_array($value, ['A', 'B', 'C'], true));                              
