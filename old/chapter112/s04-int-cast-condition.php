<?php
// bool(true)
var_dump(0 == 'A'); 

// 数値にキャストされたAは、int(0)になる
// これと0が比較されることによって、trueと判定される
var_dump((int) 'A');
