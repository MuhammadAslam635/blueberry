<?php

namespace App\Livewire\Admin\Orders;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Mary\Traits\Toast;

class OrdersComponent extends Component
{
    use Toast;
    #[Layout('layouts.dashboard-layout')]
    public function render()
    {
        return view('livewire.admin.orders.orders-component');
    }
}
