<?php
declare(strict_types=1);


/**
 * @param float $amount
 * @return string
 */
function formatDollarAmount(float $amount): string {
   $isNegative = ($amount < 0);

   return ($isNegative ? '-' : ''). '$'. number_format(abs($amount), 2);
}