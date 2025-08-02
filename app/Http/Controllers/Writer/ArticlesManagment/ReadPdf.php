<?php

namespace App\Http\Controllers\Writer\ArticlesManagment;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Repositories\Writer\ArticlesManagment\GetOneArticleForEdition;
use Illuminate\Http\Request;

class ReadPdf extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        visitor()->visit();

        $pdf = Article::find($request->id)->file ;
        // dd(public_path($pdf));
        return response()->file(public_path($pdf));
    }
}
