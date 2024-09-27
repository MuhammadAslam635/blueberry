<?php

namespace App\Policies;

use App\Models\NewsLetter;

class NewsLetterPolicy
{
    public function enable(): bool
    {
        $news = NewsLetter::first();

        return $news->status == true;
    }
}
