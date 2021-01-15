<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ContactRequest extends FormRequest 
{
    public function __construct()
    {
        
    }
    /**
     * Determine if the user is authorized to make this request.
     * Set true to authorize, false to unauthorize
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
        $rules = [
            'user_id' => 'required|integer|min:1',
            'comment' => 'required|max:400',
        ];

        return $rules;
    }

    public function attributes()
    {
        return [
            'user_id' => 'ユーザーID',
            'comment' => 'お問い合わせ内容',
        ];
    }
}