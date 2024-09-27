<?php

namespace App\Livewire\Admin\Banner;

use App\helper\ErrorLog;
use App\Models\Banner;
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Mary\Traits\Toast;

class UpdateBannerComponent extends Component
{
    use Toast;
    use WithFileUploads;

    #[Layout('layouts.dashboard-layout')]

    #[Rule('nullable|image')]
    public $photo;

    public $photo2;

    #[Rule('required|string')]
    public $title;

    #[Rule('required|string')]
    public $heading1;

    #[Rule('required|string')]
    public $heading2;

    #[Rule('required|string')]
    public $heading3;

    #[Rule('required|in:1,0')]
    public $status;

    #[Rule('required|url')]
    public $url;

    public $bannerId;

    public function mount($banner)
    {

        $this->bannerId = $banner;
        $banner = Banner::find($this->bannerId);
        Gate::authorize('update', $banner);
        $this->title = $banner->title;
        $this->heading1 = $banner->heading1;
        $this->heading2 = $banner->heading2;
        $this->heading3 = $banner->heading3;
        $this->status = $banner->status;
        $this->photo2 = $banner->image;
        $this->url = $banner->link;
    }

    public function updateBanner()
    {
        $this->validate();
        try {
            $banner = Banner::find($this->bannerId);
            $banner->title = $this->title;
            $banner->heading1 = $this->heading1;
            $banner->heading2 = $this->heading2;
            $banner->heading3 = $this->heading3;
            $banner->status = $this->status;
            if ($this->photo) {
                $image = Carbon::now()->timestamp.'.'.$this->photo->extension();
                $this->photo->storeAs('assets/img/banner', $image);
                $banner->image = $image;
                if ($this->photo2) {
                    $filePath = 'assets/img/banner/'.$this->photo2;
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                }
            }
            $banner->link = $this->url;
            $banner->save();
            $this->success('Banner Updated');

        } catch (\Exception $e) {
            (new ErrorLog)('Banner Updating', $e->getMessage());
            $this->error($e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.admin.banner.update-banner-component');
    }
}
