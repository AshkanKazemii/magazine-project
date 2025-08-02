<?php

namespace App\Http\Controllers;

use App\Repositories\GetQuarterly;
use App\Repositories\GetReferees;
use Illuminate\Http\Request;

class ViewRefereesEn extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , GetQuarterly $getQuarterly , GetReferees $getReferees)
    {
        // dd($getReferees());
        return view("referees-en" , [
            "quarterlies" => $getQuarterly(), 
            "referees" => $getReferees() , 
            "last_quarterlies" => $this->last_quarterlies
        ]);
    }
}
