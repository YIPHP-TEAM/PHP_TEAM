<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;


class SearchRequest extends FormRequest
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
            'keyword' => 'required|string',
            'point' => 'required|string', 
        ];

        return $rules;
    }

    public function attributes()
    {
        return [
            'keyword' => 'keyword',
            'point' => 'point',
        ];
    }
}