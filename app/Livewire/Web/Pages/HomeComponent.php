<?php

namespace App\Livewire\Web\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

class HomeComponent extends Component
{
    #[Layout('layouts.web-layout')]
    public function render()
    {
        return view('livewire.web.pages.home-component');
    }
}
