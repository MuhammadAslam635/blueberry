<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Mary\Traits\Toast;
use Livewire\WithfileUploads;
use Livewire\WithPagination;
class Categoriescomponent extends Component
{
    use Toast;
    use WithPagination;

    #[Layout('layouts.dashboard-layout')]
    public function render()
    {
        $categories = Category::paginate(10);
        return view('livewire.admin.category.categoriescomponent',get_defined_vars());
    }
}
