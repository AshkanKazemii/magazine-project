<?php

namespace App\Http\Controllers\ChiefEditor\ArticleManagment;

use App\Http\Controllers\Controller;
use App\Repositories\ChiefEditor\ArticlesManagment\ApprovalArticleByCheifEditor as ArticlesManagmentApprovalArticleByCheifEditor;
use Illuminate\Http\Request;

class ApprovalArticleByCheifEditor extends Controller
{
    public function __invoke(Request $request , ArticlesManagmentApprovalArticleByCheifEditor $approvalArticleByCheifEditor)
    {
        visitor()->visit();

        $approvalArticleByCheifEditor($request->article_id , $request->user_id) ;
        return redirect()->back();
    }
}
