<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
        //メンバー登録フォーム
        'user_company'=>'required|max:30',
        'user_name_katakana'=>'required|max:30',
        //重複なし
        'user_email'=>'required|unique:users,user_email',
        'user_password'=>'required|min:30',
        'user_tel'=>'required|user_tel',
        'user_postcode'=>'required|user_postcode',
        'user_prefectures'=>'required',
        'user_city'=>'required|max:30',
        'user_address_and_building'=>'required|max:50',
        'content'=> 'max:255',
        ];
    }
}
