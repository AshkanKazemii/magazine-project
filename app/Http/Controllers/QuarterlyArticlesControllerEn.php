<?php

namespace App\Http\Controllers;

use App\Repositories\GetQuarterly;
use App\Repositories\GetQuarterlyArticles;
use Illuminate\Http\Request;

class QuarterlyArticlesControllerEn extends Controller
{

    public function __invoke(Request $request , GetQuarterlyArticles $get_quarterly_articles )
    {
        return view("quarterly-articles-en" , [
            "quarterly_articles" => $get_quarterly_articles($request->quarterly_id) , 
            "last_quarterlies" => $this->last_quarterlies
        ]) ;
    }
}
