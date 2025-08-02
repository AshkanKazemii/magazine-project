<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class EditUserInfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name_and_family' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore(Auth::user()->id)
            ],

            "university" => ['required', 'string', 'max:255'],
            "college" => ['required', 'string', 'max:255'] ,
            "field" => ['required', 'string', 'max:255'] ,
            "mobile" => ['required', 'string', 'max:255'] ,
        ];
    }


    public function messages()
    {
        return [
            "email.unique" => "این ایمیل قبلا در سیستم ثبت شده است",
            "email.required" => "لطفا فیلد ایمیل را پر کنید" ,  
            "role.required" => "لطفا فیلد مقام را پر کنید" ,  
            "password.required" => "لطفا فیلد رمز عبور را پر کنید" ,  
            "email.email" => "لطفا ساختار درست ایمیل را وارد کنید" ,  
            "email.max" => "لطفا در فیلد ایمیل داستان ننویسید"
        ];
    }
}
