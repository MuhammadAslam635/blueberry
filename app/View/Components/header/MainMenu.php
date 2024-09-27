<?php

namespace App\View\Components\header;

use App\Models\Category;
use App\Models\StoreLocation;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MainMenu extends Component
{
    public function render(): View|Closure|string
    {
        $locations = StoreLocation::get();
        $categories = Category::where('status', 'active')->get();

        return view('components.header.main-menu', get_defined_vars());
    }
}
