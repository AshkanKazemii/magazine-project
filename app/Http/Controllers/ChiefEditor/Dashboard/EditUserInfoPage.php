<?php

namespace App\Http\Controllers\ChiefEditor\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\ChiefEditor\Dashboard\ViewStatistics;

class EditUserInfoPage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(ViewStatistics $viewStatistics)
    {
        return view("panels.chief_editor.edit-user-info" , [
            "number_of_unverified_articles" => $viewStatistics()['number_of_unverified_articles'] ,
        ]);
    }
}
