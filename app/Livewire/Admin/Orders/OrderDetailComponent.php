<?php

namespace App\Livewire\Admin\Orders;

use App\helper\ErrorLogHelper;
use App\Models\Order;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Mary\Traits\Toast;

class OrderDetailComponent extends Component
{
    use Toast;

    #[Layout('layouts.dashboard-layout')]
    public Order $order;

    public bool $statusD = false;

    #[Validate('required')]
    public $status;

    public $cancel_date;

    public function mount($id): void
    {
        $this->order = Order::find($id);
        $this->status = $this->order->status;
    }

    public function openD(): void
    {
        $this->statusD = true;
    }

    public function save()
    {
        $this->validate();
        try {
            $this->order->update([
                'status' => $this->status,
                'cancel_date' => $this->cancel_date,
            ]);
            $this->success('Status Updated');
            $this->statusD = false;
        } catch (\Exception $e) {
            (new ErrorLogHelper)('Order Status updating', $e->getMessage());
            $this->error('Please Check error logs');
            $this->statusD = false;
        }

    }

    public function render()
    {
        return view('livewire.admin.orders.order-detail-component');
    }
}
