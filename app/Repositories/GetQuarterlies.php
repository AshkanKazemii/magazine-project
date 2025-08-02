<?php


namespace App\Repositories ;

use App\Models\Quarterly;

class GetQuarterlies
{
    public function __invoke()
    {
        return Quarterly::all();
    }
}