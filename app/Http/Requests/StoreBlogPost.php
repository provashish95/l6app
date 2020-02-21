<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
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
                  'name'=>'bail|alpha|required|between:2,8',
//                'password'=>'bail|confirmed',
                  'check.*.id'=>'bail|distinct',
                  'email' => 'bail|email:rfc,dns',
//                'name'=>'required|alpha_num',
//                'email'=>'required',
//                'photo'=>'bail|required|between:2,3'
                  'tos'=>'bail|boolean',
                  'website'=>'bail|active_url',
                  'start_date'=>'bail|required|date',
                  'end_date'=>'bail|required|date|after:start_date'
//                'end_date'=>'required|date|after_or_equal:start_date'
        ];
    }
    public function messages()
    {
        return [
            'required'=>'And This field is required'
        ];
    }
}
