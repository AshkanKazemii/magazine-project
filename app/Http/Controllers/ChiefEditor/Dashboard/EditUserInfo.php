<?php

namespace App\Http\Controllers\ChiefEditor\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditUserInfoRequest;
use App\Repositories\Superadmin\EditUserInfoRepo;


class EditUserInfo extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(EditUserInfoRequest $request , EditUserInfoRepo $edit_user_info_repo)
    {

        $edit_user_info_repo($request);
        $request->session()->flash("edit-user-info" , "حساب کاربری با موفقیت ویرایش شد");
        
        return redirect()->back() ;
    }
}
