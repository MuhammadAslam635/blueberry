<?php

namespace App\helper;

use App\Models\ErrorLog as ModelsErrorLog;

class ErrorLog
{
    public function __invoke($link, $error)
    {
        //dd($error);
        $error = new ModelsErrorLog;
        $error->request = $link;
        $error->error = $error;
        $error->save();

    }
}
