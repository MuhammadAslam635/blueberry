<?php

namespace App\Livewire\Web\Section\Header;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Mary\Traits\Toast;

class NewsLetterComponent extends Component
{
    use Toast;

    #[Validate('required|email')]
    public $mail;

    public function sentMail()
    {
        $this->validate();
        $this->success('Mail Send to');
    }

    public function render()
    {
        return view('livewire.web.section.header.news-letter-component');
    }
}
