<?php

namespace App\Helpers;

class FormatNumber
{
    public static function formatNumber($number)
    {
        if ($number >= 1000000000) {
            return number_format($number / 1000000000, 2) . 'bn';
        } elseif ($number >= 1000000) {
            // Format as millions (e.g., 1.1m)
            return number_format($number / 1000000, 2) . 'm';
        } elseif ($number >= 1000) {
            // Format as thousands (e.g., 1.1k)
            return number_format($number / 1000, 2) . 'k';
        } else {
            // Return the original number
            return $number;
        }

        //thanke Go
    }
}
