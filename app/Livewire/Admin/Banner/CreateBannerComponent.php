<?php

namespace App\Livewire\Admin\Banner;

use App\Helper\ErrorLogHelperg;
use App\Models\Banner;
use Carbon\Carbon;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Mary\Traits\Toast;

class CreateBannerComponent extends Component
{
    use Toast;
    use WithFileUploads;

    #[Layout('layouts.dashboard-layout')]

    #[Rule('nullable|image')]
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

    public function save()
    {
        $this->validate();
        try {
            $banner = new Banner;
            $banner->title = $this->title;
            $banner->heading1 = $this->heading1;
            $banner->heading2 = $this->heading2;
            $banner->heading3 = $this->heading3;
            $banner->status = $this->status;
            if ($this->photo2) {
                $image = Carbon::now()->timestamp.'.'.$this->photo2->extension();
                $this->photo2->storeAs('assets/img/banner', $image);
                $banner->image = $image;
            }
            $banner->link = $this->url;
            $banner->save();
            $this->success('Bnner Added');
            $this->reset();

        } catch (\Exception $e) {
            (new ErrorLog)('Banner Creating', $e->getMessage());
            $this->error($e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.admin.banner.create-banner-component');
    }
}
