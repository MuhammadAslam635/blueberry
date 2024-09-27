<?php

namespace App\View\Components\web;

use App\Models\NewsLetter as ModelsNewsLetter;
use App\Policies\NewsLetterPolicy;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewsLetter extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        if (app(NewsLetterPolicy::class)->enable()) {
            $news = ModelsNewsLetter::first();

            return view('components.web.news-letter', get_defined_vars());
        }

        return '';
    }
}
