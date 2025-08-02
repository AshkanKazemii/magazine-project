<?php


namespace App\Repositories\ChiefEditor\ArticlesManagment ;

use App\Models\ArticleApprovalsChiefEditor;
use App\Models\ArticleApprovalsReferee;


class ArticlesCommentedByReferees 
{
    public function __invoke()
    {
        return ArticleApprovalsChiefEditor::where("is_confirmation" , "=" , 1)->whereHas('article' , function($query){
            $query->where('publish' , '=' , false) ;
        })->get();  
    }
    
}
