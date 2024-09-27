<?php

namespace App\Livewire\Web\Section;

use App\Models\Banner;
use Livewire\Component;

class HeroComponent extends Component
{
    public function render()
    {
        $banners = Banner::where('status', true)->get();

        return view('livewire.web.section.hero-component', get_defined_vars());
    }
}
