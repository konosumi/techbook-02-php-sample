<?php
/**
 * swtichにおける緩やかな比較問題
 */

// 緩やかな比較問題とは、このような問題です。
// 結果： 0 is A
if (0 == 'A') {
    echo '0 is A'.PHP_EOL;
}

// 結果： 0 is A
switch (0) {
    case 'A': 
        // string(6) "Hit A!"
        echo '0 is A'.PHP_EOL;
        break;
    case 0: 
        // 本来ならここに来るはず
        echo '0 is 0'.PHP_EOL;
        break;
    default: 
        echo 'No hit!'.PHP_EOL;
}
