<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryuutarou
 * Date: 2018/03/12
 * Time: 23:18
 */
findZero('01234');  // found a zero
findZero('43210');  // did not find a zero
findZero('0');      // did not find a zero
findZero('00');     // found a zero
findZero('000');    // found a zero
findZero('10');     // did not find a zero
findZero('100');    // found a zero

function findZero($numberString)
{
    if (strstr($numberString, '0')) {
        echo 'found a zero' . PHP_EOL;
    } else {
        echo 'did not find a zero' . PHP_EOL;
    }
}

?>