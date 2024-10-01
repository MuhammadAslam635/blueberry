<?php

namespace App\Livewire\Admin\Category\Sub;

use App\helper\ErrorLogHelper;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Mary\Traits\Toast;

class EditSubCategoryComponent extends Component
{
    use Toast;

    #[Layout('layouts.dashboard-layout')]
    #[Validate('required|string|min:3')]
    public $name;

    #[Validate('required|string|unique:tags,slug,id')]
    public $slug;

    #[Validate('required|string|in:active,inactive')]
    public $status;

    #[Validate('required')]
    public $category_id;

    public $subId;

    public function mount($id)
    {
        $this->subId = $id;
        $sub = SubCategory::find($this->subId);
        $this->category_id = $sub->category_id;
        $this->name = $sub->name;
        $this->slug = $sub->slug;
        $this->status = $sub->status;
    }

    public function genSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function udpateSubCategory()
    {
        try {
            $sub = SubCategory::find($this->subId);
            $sub->category_id = $this->category_id;
            $sub->name = $this->name;
            $sub->slug = $this->slug;
            $sub->status = $this->status;
            $sub->save();
            $this->dispatch('pg:eventRefresh-SubCategoryTable');
            $this->success('SubCategory Created');
            $this->redirect('/admin/sub-categories',' navigate: true');
        } catch (\Exception $e) {
            (new ErrorLogHelper)('Edit Subcategory', $e->getMessage());
            $this->error('Please Check error logs');
        }
    }

    public function render()
    {
        $categories = Category::where('status', 'active')->get();

        return view('livewire.admin.category.sub.edit-sub-category-component', get_defined_vars());
    }
}
