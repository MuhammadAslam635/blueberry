<?php

namespace App\Livewire\Admin\Orders;

use App\Models\Order;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Mary\Traits\Toast;

class OrderDetailComponent extends Component
{
    use Toast;
    #[Layout('layouts.dashboard-layout')]
    public Order $order;
    public function mount($id):void{
        $this->order = Order::find($id);
    }
    public function render()
    {
        return view('livewire.admin.orders.order-detail-component');
    }
}
