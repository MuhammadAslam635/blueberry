<?php

namespace App\Livewire\Admin\Tags;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Mary\Traits\Toast;

class TagsComponent extends Component
{
    use Toast;

    #[Layout('layouts.dashboard-layout')]
    public function render()
    {
        return view('livewire.admin.tags.tags-component');
    }
}
