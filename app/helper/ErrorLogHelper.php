<?php

namespace App\helper;

use App\Models\LogErrors;

class ErrorLogHelper
{
    public function __invoke($link, $error)
    {

            $log = new LogErrors();
           // dd($log);
            $log->name = $link;
            $log->error = $error;
            $log->save();



    }
}
