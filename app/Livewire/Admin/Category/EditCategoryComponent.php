<?php

namespace App\Livewire\Admin\Category;

use App\helper\ErrorLogHelper;
use App\Models\Category;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Mary\Traits\Toast;
use Livewire\WithfileUploads;
use Illuminate\Support\Str;
class EditCategoryComponent extends Component
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
    public $newLogo;
    public $logo;
    public $catId;
    public function mount($id)
    {
        $this->catId = $id;
        $cat = Category::find($this->catId);
        $this->name = $cat->name;
        $this->slug = $cat->slug;
        $this->status = $cat->status;
        $this->logo = $cat->logo;
    }

    public function genSlug(){
        $this->slug = Str::slug($this->name,'-');
    }

    public function updateCategory(){
        $this->validate();
        try {
            $cat = Category::find($this->catId);
            $cat->name = $this->name;
            $cat->slug = $this->slug;
            $cat->status = $this->status;
            if ($this->newLogo) {
                $image = Carbon::now()->timestamp . '.' . $this->newLogo->extension();
                $this->newLogo->storeAs('assets/img/category', $image);
                $cat->logo = $image;
                if(isset($this->logo)){

                    $filePath = 'assets/img/category/' . $this->logo;

                    if(file_exists($filePath)){

                        unlink($filePath);

                    }

                }
            }
            $cat->save(); // Intentional error
            $this->success('category updated');
        } catch (\Exception $e) {
            (new ErrorLogHelper)('Udpate Category', $e->getMessage());
            $this->error('Please Check error Logs');
        }
    }
    public function render()
    {
        return view('livewire.admin.category.edit-category-component');
    }
}
