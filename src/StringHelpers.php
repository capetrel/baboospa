<?php

namespace App;

use NumberFormatter;

class StringHelpers
{
    public function formatTelHref(string $tel, string $space = ' '): string
    {
        return '+33' . substr(str_replace($space, '', $tel), 1);
    }

    public function spaceToNBSP(string $number, string $space = ' '): string
    {
        return str_replace(' ', $space, $number);
    }

    public function moneyFormat(float|int $amount, string $currency = 'EUR', string $local = 'fr_FR', bool $integer = true): string
    {
        $fmt = new NumberFormatter( $local, NumberFormatter::CURRENCY );

        if($integer) {
            $fmt->setAttribute(NumberFormatter::FRACTION_DIGITS, 0);
        }

        return $fmt->formatCurrency($amount, $currency);
    }
}
