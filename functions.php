<?php

/**
 * @param int $number
 * @return int
 */
function transform($number = 0) {
    $x = 0;
    $y = 1;
    while ($number > 0) {
        $a = $number % 10;
        $b = $a + 1;
        $number = (int)($number / 10);
        $x = $x + ($b * $y);
        if ($b <= 9) {
            $y = $y * 10;
        } else {
            $y = $y * 100;
        }
    }
    return $x;
}