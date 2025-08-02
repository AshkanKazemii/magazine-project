<?php


namespace App\Repositories ;

use App\Models\Quarterly;

class LastQuarterlies
{
    public function __invoke()
    {
        return  Quarterly::latest()->limit(3)->get();
    }
}