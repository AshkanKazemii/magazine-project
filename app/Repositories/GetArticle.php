<?php


namespace App\Repositories ;

use App\Models\Article;

class GetArticle
{
    public function __invoke($id)
    {
        return Article::where('id' , '=' , $id)->where('publish' , '=' , 1)->first();
    }
}