<?php

namespace App\Repositories\Superadmin\Quarterly ;

use App\Models\Quarterly;

class DeleteQuarterly
{
    public function __invoke($quarterlyid)
    {
        return Quarterly::where("id" , $quarterlyid)->delete();
    }
}