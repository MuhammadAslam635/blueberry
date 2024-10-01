<?php

namespace App\Livewire\Admin\Category\Sub;

use App\helper\ErrorLogHelper;
use App\Models\Category;
use App\Models\SubCategory;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Mary\Traits\Toast;

class SubCategoryComponent extends Component
{
    use Toast;
    #[Layout('layouts.dashboard-layout')]
    public bool $openDrawer = false;
    #[Validate('required|string|min:3')]
    public  $name;
    #[Validate('required|string|unique:tags,slug')]
    public $slug;
    // #[Validate('required|string|in:active,inactive')]
    // public $status;
    #[Validate('required')]
    public $category_id;
    public function openDraw(){
        $this->openDrawer = true;
    }
    public function closeDraw(){
        $this->openDrawer = false;
    }
    public function genSlug(){
        $this->slug = Str::slug($this->name,'-');
    }
    public function save(){
        try{
            $sub = new SubCategory();
            $sub->category_id = $this->category_id;
            $sub->name = $this->name;
            $sub->slug = $this->slug;
            $sub->status = 'active';
            $sub->save();
            $this->dispatch('pg:eventRefresh-SubCategoryTable');
            $this->success('SubCategory Created');
        }catch(\Exception $e){
            (new ErrorLogHelper)('Create Subcategory',$e->getMessage());
            $this->error('Please Check error logs');
        }
    }
    public function render()
    {
        $categories = Category::where('status','active')->get();
        return view('livewire.admin.category.sub.sub-category-component',get_defined_vars());
    }
}
