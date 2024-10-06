<?php

namespace App\Livewire\Web\Section;

use App\Models\Category;
use App\Models\Currency;
use App\Models\StoreLocation;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class HeaderComponent extends Component
{
    public function changeLanguage($locale)
    {
        session()->put('locale', $locale);
        App::setLocale($locale);

    }

    public function changeCurrency($code)
    {
        $defaultCurrency = Currency::first();

        // If no currency code is provided, set the default currency symbol
        if ($code === null) {
            $code = $defaultCurrency->symbol;
        }

        // Set the currency symbol in the session
        session()->put('currency', $code);

        // Update the currency rate
        Currency::where('symbol', $code)->first()->symbol;
    }

    public function render()
    {
        $locations = StoreLocation::where('status', 'active')->get();
        $categories = Category::where('status', 'active')->InRandomOrder()->limit(4)->get();
        //dd($categories);

        return view('livewire.web.section.header-component', get_defined_vars());
    }
}
