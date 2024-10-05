<?php

namespace App\Livewire\Admin\Category;

use App\Helper\ErrorLogHelper;
use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Mary\Traits\Toast;
use Livewire\WithfileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Str;
use Carbon\Carbon;
class CreateCategoryComponent extends Component
{
    use Toast;
    use WithFileUploads;
    #[Layout('layouts.dashboard-layout')]

    #[Validate('required|string:min:3')]
    public $name;
    #[Validate('required|string:min:3|unique:categories,slug')]
    public $slug;
    #[Validate('required')]
    public $status;
    #[Validate('nullable|mimes:png,jpg')]
    public $logo;

    public function genSlug(){
        $this->slug = Str::slug($this->name,'-');
    }

    public function save(){
        $this->validate();
        try {
            $cat = new Category();
            $cat->name = $this->name;
            $cat->slug = $this->slug;
            $cat->status = $this->status;
            if ($this->logo) {
                $image = Carbon::now()->timestamp . '.' . $this->logo->extension();
                $this->logo->storeAs('assets/img/category', $image);
                $cat->logo = $image;
            }
            $cat->save(); // Intentional error
            $this->dispatch('pg:eventRefresh-category-table-zqb9y7-table');
            $this->reset();
            $this->success('category created');
        } catch (\Exception $e) {
            (new ErrorLogHelper)('createing New Category', $e->getMessage());
            $this->error('Please Check error Logs');
        }
    }
    public function render()
    {
        return view('livewire.admin.category.create-category-component');
    }
}
