<?php

namespace App\Http\Controllers\Writer\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatingUserByAdmin;
use App\Http\Requests\EditUserInfoRequest;
use App\Repositories\Superadmin\CreateNewUser as SuperadminCreateNewUser;
use App\Repositories\Superadmin\EditUserInfoRepo;
use Illuminate\Http\Request;

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
