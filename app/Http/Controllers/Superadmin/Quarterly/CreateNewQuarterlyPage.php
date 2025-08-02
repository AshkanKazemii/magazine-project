<?php

namespace App\Http\Controllers\Superadmin\Quarterly;

use App\Http\Controllers\Controller;
use App\Models\Quarterly;
use App\Repositories\GetQuarterlies;
use Illuminate\Http\Request;

class CreateNewQuarterlyPage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , GetQuarterlies $get_quarterlies)
    {
        return view("panels.super_admin.create-new-quarterly" , [
            'quarterlies' => $get_quarterlies()
        ]) ;
    }
}
