<?php

namespace App\Policies;

use App\Models\Curreny;

class CurrenyPolicy
{
    public function code()
    {
        $defaultCurrency = Curreny::first();
        $currencyCode = session()->get('currency', $defaultCurrency->symbol);

        return $currencyCode;
    }
}
