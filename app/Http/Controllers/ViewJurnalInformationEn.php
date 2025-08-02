<?php

namespace App\Http\Controllers;

use App\Repositories\GetQuarterly;
use App\Repositories\GetRolesJurnal;
use Illuminate\Http\Request;

class ViewJurnalInformationEn extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , GetQuarterly $getQuarterly , GetRolesJurnal $getRolesJurnal)
    {
        return view("jurnal-information-en" , [
            "quarterlies" => $getQuarterly() , 
            "roles_jurnal" => $getRolesJurnal() , 
                        "last_quarterlies" => $this->last_quarterlies
        ]);
    }
}
