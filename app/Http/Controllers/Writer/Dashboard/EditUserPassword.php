<?php

namespace App\Http\Controllers\Writer\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatingUserByAdmin;
use App\Http\Requests\EditUserInfoRequest;
use App\Http\Requests\EditUserPasswordRequest;
use App\Repositories\Superadmin\CreateNewUser as SuperadminCreateNewUser;
use App\Repositories\Superadmin\EditUserInfoRepo;
use App\Repositories\Superadmin\EditUserPasswordRepo;
use Illuminate\Http\Request;

class EditUserPassword extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(EditUserPasswordRequest $request , EditUserPasswordRepo $edit_user_password_repo)
    {

        $result = $edit_user_password_repo($request);
        if($result) {
            $request->session()->flash("edit-password-info" , "رمز عبور با موفقیت ویرایش شد");

        } else {
            $request->session()->flash("edit-password-info-err" , "رمز عبور ویرایش نشد رمز عبور قبلی یا تکرار رمز عبور را درست وارد نمایید");
        }
        
        return redirect()->back() ;
    }
}
