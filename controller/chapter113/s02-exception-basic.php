<?php
try {
    if (1 !== 0) {
        // 1は0ではない例外の発生
        throw new \Exception('1 is not 0.');
    }
} catch (\Exception $e) {
    // 1 is not 0.
    echo $e->getMessage();
}
