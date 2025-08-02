<?php

namespace App\Http\Controllers\Superadmin\Dashboard;

use App\Http\Controllers\Controller;
use App\Repositories\Superadmin\VisitorRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VisitorPage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(VisitorRepo $visitor)
    {
        return view("panels.super_admin.visitor" , [
            "visitors" => $visitor()
        ]);
    }
}
