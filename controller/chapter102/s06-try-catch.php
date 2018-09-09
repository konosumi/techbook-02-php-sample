<?php
declare(strict_types=1);
// TypeErrorのスロー
function test(): int
{
    // Int制約なのに真偽値を返している
    return true;
}

try {
    test();
} catch (Exception $e) {
    // Exceptionを継承した例外ではないので、ここでは捕捉されない
    echo get_class($e)."\n<br>";
    echo "Exception!\n<br>";
} catch (TypeError $e) {
// } catch (Error $e) {
    // TypeErrorと表示される
    echo get_class($e)."\n<br>";
    echo "Error!\n<br>";
}
