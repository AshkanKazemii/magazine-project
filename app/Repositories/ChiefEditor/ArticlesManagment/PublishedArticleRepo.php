<?php

namespace App\Repositories\ChiefEditor\ArticlesManagment ;

use App\Models\Article;
use App\Models\ArticleApprovalsChiefEditor;

class PublishedArticleRepo
{
    public function __invoke($id)
    {
        return Article::where('id' , '=' , $id)->update([ 
            'publish' => 1 
        ]) ;
    }
}