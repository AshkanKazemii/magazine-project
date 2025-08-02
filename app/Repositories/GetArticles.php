<?php


namespace App\Repositories ;

use App\Models\Article;

class GetArticles
{
    public function __invoke()
    {
        return Article::where('publish' , '=' , 1)->get();
    }
}