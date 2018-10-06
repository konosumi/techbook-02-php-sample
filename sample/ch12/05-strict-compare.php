<?php
/**
 * 厳密な比較
 */
// bool(true) bool(false) 
var_dump(0 == 'A'); 
var_dump(0 === 'A'); 

// bool(true) bool(false) 
var_dump(0 == '0'); 
var_dump(0 === '0'); 

// bool(true) bool(false) 
var_dump(0 == false); 
var_dump(0 === false); 

// bool(true) bool(true) 
var_dump(0 == 0); 
var_dump(0 === 0); 
