<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    //eğer true ise kullanan herkes formu gönderebilir.false ise sadece yetkilendirilen kişiler gönderebilir.
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */


    public function rules(): array
    {

        return [
            'email'=>['required','email','exists:users'],
            'password'=>['required']
        ];
    }
    public function messages(){
        return[
          'email.exists'=>"Bilgileriniz eksik ya da hatalı"
        ];
    }
}
