<?php

namespace App\Http\Controllers\ChiefEditor\ArticleManagment;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Repositories\GetQuarterly;
use Illuminate\Http\Request;
use App\Repositories\ShowArticle;

class ViewTestArticle extends Controller
{
    public function __invoke(Request $request , ShowArticle $showArticle , GetQuarterly $get_quarterly)
    {
        visitor()->visit();

        return view("panels.chief_editor.view-test-article" , [
            "article" => Article::where([
                ['id' , '=' , $request->id] , 
                ['failed' , '=' , "null"]
            ])->first() , 
            "quarterlies" => $get_quarterly
        ]);
    }
}
