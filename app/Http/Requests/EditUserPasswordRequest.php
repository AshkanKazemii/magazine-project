<?php

namespace App\Http\Requests;

use App\Actions\Fortify\PasswordValidationRules;
use Illuminate\Foundation\Http\FormRequest;

class EditUserPasswordRequest extends FormRequest
{
    use PasswordValidationRules;

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
            'new_password' => $this->passwordRules(),
        ];
    }


    public function messages()
    {
        return [
            "new_password.required" => "لطفا فیلد رمز عبور جدید را پر کنید",
            "password_confirmation.required" => "لطفا فیلد  تکرار رمز عبور جدید را پر کنید" ,  
            "password.required" => "لطفا فیلد رمز عبور قبلی را پر کنید" ,  
        ];
    }
}
