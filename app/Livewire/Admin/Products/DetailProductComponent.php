<?php

namespace App\Livewire\Admin\Products;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Mary\Traits\Toast;

class DetailProductComponent extends Component
{
    use Toast;
    #[Layout('layouts.dashboard-layout')]
    public Product $product;
    public function mount($id):void{
        $this->product= Product::find($id);
    }
    public function render()
    {
        return view('livewire.admin.products.detail-product-component');
    }
}
