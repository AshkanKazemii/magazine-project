<?php

namespace App\Repositories\Superadmin ;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EditUserInfoRepo 
{
    public function __invoke($request)
    {
        return User::where('id' , '=' , Auth::user()->id)->update([
            'name_and_family' => $request->name_and_family ,
            'email' => $request->email,
            'university' => $request->university,
            'college' => $request->college,
            'field' => $request->field,
            'mobile' => $request->mobile,
        ]);
    }
}