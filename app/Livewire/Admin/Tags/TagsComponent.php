<?php

namespace App\Livewire\Admin\Tags;

use App\helper\ErrorLogHelper;
use App\Models\Tag;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Mary\Traits\Toast;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;

class TagsComponent extends Component
{
    use Toast;

    #[Layout('layouts.dashboard-layout')]
    public bool $openDrawer = false;
    #[Validate('required|string|min:3')]
    public  $name;
    #[Validate('required|string|unique:tags,slug')]
    public $slug;


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
        $this->validate();
        try{
             $tag = new Tag();
             $tag->name = $this->name;
             $tag->slug = $this->slug;
             $tag->status = 'active';
             $tag->save();
             $this->dispatch('pg:eventRefresh-TagTable');
             $this->reset();
             $this->success('Tag Created');

        }catch(\Exception $e){
            (new ErrorLogHelper)('Creating Tag',$e->getMessage());
            $this->reset();
            $this->error('Please Check error logs');

        }
    }

    public function render()
    {
        return view('livewire.admin.tags.tags-component');
    }
}
