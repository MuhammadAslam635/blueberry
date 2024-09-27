<?php

namespace App\Livewire\Admin\Banner;

use App\helper\ErrorLog;
use App\Models\Banner;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Mary\Traits\Toast;

class BannerComponent extends Component
{
    use Toast;
    use WithFileUploads;
    use WithPagination;

    #[Layout('layouts.dashboard-layout')]
    public bool $openModalB = false;

    public bool $deleteMod = false;

    public $bannerId;

    public $photo2;

    public $title;

    public $heading1;

    public $heading2;

    public $heading3;

    public $status;

    public $url;

    public function openModal($id)
    {

        if ($id) {
            $banner = Banner::find($id);
            $this->title = $banner->title;
            $this->heading1 = $banner->heading1;
            $this->heading2 = $banner->heading2;
            $this->heading3 = $banner->heading3;
            $this->status = $banner->status;
            $this->url = $banner->link;
            $this->photo2 = $banner->image;
        } else {
            return;
        }
        $this->openModalB = true;
    }

    public function updateStatus($id)
    {
        try {
            $banner = Banner::find($id);
            $banner->status = $banner->status == true ? false : true;
            //dd($banner->status);
            $banner->save();
            $this->success('Status Updated');
        } catch (\Exception $e) {
            (new ErrorLog)('Updating Banner', $e->getMessage());
            $this->error($e->getMessage());
        }
    }

    public function openDelModal($id)
    {
        $this->bannerId = $id;
        $this->deleteMod = true;
    }

    public function closeModal()
    {
        $this->reset();
        $this->openModalB = false;
        $this->deleteMod = false;
    }

    public function deleteBanner()
    {
        try {
            $banner = Banner::find($this->bannerId);
            $banner->delete();
            $this->success('Banner Deleted');
            $this->reset();
            $this->deleteMod = false;

        } catch (\Exception $e) {
            (new ErrorLog)('Deleting Banner', $e->getMessage());
            $this->reset();
            $this->deleteMod = false;
            $this->error($e->getMessage());

        }
    }

    public function render()
    {
        $banners = Banner::paginate(10);

        return view('livewire.admin.banner.banner-component', get_defined_vars());
    }
}
