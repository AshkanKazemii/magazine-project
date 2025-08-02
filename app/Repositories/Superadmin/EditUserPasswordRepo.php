<?php

namespace App\Repositories\Superadmin ;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EditUserPasswordRepo 
{
    public function __invoke($request)
    {
        if(Auth::check($request->password , Auth::user()->password)) {

            if($request->new_password === $request->password_confirmation) {
                return User::where('id' , '=' , Auth::user()->id)->update([
                    'password' => Hash::make($request->new_password),
        
                ]);
            }
            return false ;
           
        }

        return false ;
    }
}