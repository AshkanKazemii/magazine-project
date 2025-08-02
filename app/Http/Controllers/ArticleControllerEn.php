<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Repositories\GetArticle;
use App\Repositories\GetQuarterly;
use App\Repositories\GetQuarterlyArticles;
use Illuminate\Http\Request;

class ArticleControllerEn extends Controller
{

    public function __invoke(Request $request , GetArticle $get_article )
    {
        return view("article-en" , [
            "article" => $get_article($request->article_id) , 
            "last_quarterlies" => $this->last_quarterlies
        ]) ;
    }
}
