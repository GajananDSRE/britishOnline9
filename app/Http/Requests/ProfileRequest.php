<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class ProfileRequest extends FormRequest
{
    public $validator = null;
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
            "file" => "nullable|mimes:jpeg,jpg,png",
            "email" => "nullable|email|max:255|regex:/(.*)/|unique:users",
            'name' => 'nullable|max:255',
            'contact' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|size:10',
            'whatsapp_no' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|size:10',
            "id" => 	'required',
        ];
    }

    public function messages() {

        return [
            'file.mimes' => 'The image must be a file of type: jpeg, jpg, png.',
            'email' => 'Your email id is not valid.',
            // 'contact.regex' => 'The contact format is invalid.',
            // 'contact.min' => 'The contact must be at least 10 characters.',
            // 'contact.size' => 'The contact must be 10 characters.',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        $this->validator = $validator;  
    }
}
