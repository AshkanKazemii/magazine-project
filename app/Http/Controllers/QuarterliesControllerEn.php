<?php

namespace App\Http\Controllers;

use App\Repositories\GetQuarterly;
use Illuminate\Http\Request;

class QuarterliesControllerEn extends Controller
{

    public function __invoke(GetQuarterly $getQuarterly )
    {
        return view("quarterlies-en" , [
            "quarterlies" => $getQuarterly() , 
                        "last_quarterlies" => $this->last_quarterlies
        ]) ;
    }
}
