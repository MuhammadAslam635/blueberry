<?php

namespace App\Livewire\Admin\Products;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Mary\Traits\Toast;

class ProductsComponent extends Component
{
    use Toast;

    #[Layout('layouts.dashboard-layout')]
    public function render()
    {
        return view('livewire.admin.products.products-component');
    }
}
