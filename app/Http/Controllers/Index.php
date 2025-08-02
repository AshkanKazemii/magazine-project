<?php

namespace App\Http\Controllers;

use App\Repositories\GetArticles;
use App\Repositories\GetQuarterly;
use App\Repositories\GetRolesJurnal;
use App\Repositories\LastQuarterlies;
use Illuminate\Http\Request;

class Index extends Controller
{

    public function __invoke(Request $request , GetQuarterly $getQuarterly , GetRolesJurnal $getRolesJurnal , GetArticles $get_articles , LastQuarterlies $last_quarterlies)
    {
        return view("index" , [
            "get_articles" => $get_articles() ,
            "quarterlies" => $getQuarterly() , 
            "roles_jurnal" => $getRolesJurnal() , 
            "last_quarterlies" => $last_quarterlies()
        ]) ;
    }
}
