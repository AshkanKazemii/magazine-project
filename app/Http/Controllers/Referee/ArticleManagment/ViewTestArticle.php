<?php

namespace App\Http\Controllers\Referee\ArticleManagment;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Repositories\GetQuarterly;
use App\Repositories\ShowArticleTest;

class ViewTestArticle extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , ShowArticleTest $showArticle , GetQuarterly $get_quarterly)
    {
        visitor()->visit();

        return view("panels.referee.view-test-article" , [
            "article" => $showArticle($request->id) , 
            "quarterlies" => $get_quarterly
        ]);
    }
}
