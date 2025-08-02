<?php

namespace App\Repositories\ChiefEditor\ArticlesManagment ;

use App\Models\Article;

class PublishedArticlePageRepo 
{
    public function __invoke()
    {
        return Article::where("publish" , "=" , "1")->get() ;
    }
}