<?php

namespace App\Policies;

use App\Models\Currency;

class CurrencyPolicy
{
    public function code()
    {
        $defaultCurrency = Currency::first();
        $currencyCode = session()->get('currency', $defaultCurrency->symbol);

        return $currencyCode;
    }
}
