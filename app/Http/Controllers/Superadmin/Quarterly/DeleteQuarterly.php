<?php

namespace App\Http\Controllers\Superadmin\Quarterly;

use App\Http\Controllers\Controller;
use App\Repositories\Superadmin\Quarterly\DeleteQuarterly as QuarterlyDeleteQuarterly;
use Illuminate\Http\Request;

class DeleteQuarterly extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , QuarterlyDeleteQuarterly $delete_quarterly)
    {
        $delete_quarterly($request->id);
        return redirect()->back() ;
    }
}
