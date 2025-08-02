<?php

namespace App\Http\Controllers\ChiefEditor\ArticleManagment;

use App\Http\Controllers\Controller;
use App\Repositories\ChiefEditor\ArticlesManagment\PublishedArticleRepo;
use App\Repositories\ChiefEditor\Dashboard\ViewStatistics;
use Illuminate\Http\Request;

class PublishedArticle extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(PublishedArticleRepo $published_article, Request $request)
    {
        $published_article($request->id) ;
        return redirect()->back() ;
    }
}
