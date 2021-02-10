<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class PointRequest extends FormRequest 
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
            'clear' => 'required|',
            'content' => 'required|max:300',
        ];

        return $rules;
    }

    public function attributes()
    {
        return [
            'clear' => '達成項目',
            'content' => 'ポイント申請内容',
        ];
    }
}