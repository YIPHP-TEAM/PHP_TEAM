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
            'user_name' => 'required|string|max:50',
            'contents' => 'required|max:400',
        ];

        return $rules;
    }

    public function attributes()
    {
        return [
            'category_id' => __('post.category'),
            'category_id.*' => __('post.category'),
        ];
    }
}