<?php

namespace App\View\Components\header;

use App\Models\Currency;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TopHeader extends Component
{
    public function __construct()
    {
        //
    }

    public function render(): View|Closure|string
    {
        $currencies = Currency::where('status', 1)->get();

        return view('components.header.top-header', get_defined_vars());
    }
}
