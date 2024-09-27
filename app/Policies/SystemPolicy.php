<?php

namespace App\Policies;

use App\Models\System;
use Illuminate\Support\Facades\Log;

class SystemPolicy
{
    public function type()
    {
        $type = System::first()->type;
        Log::info('system', $type);
        Log::debug('system', $type);

        dd($type);

        return $type;
    }
}
