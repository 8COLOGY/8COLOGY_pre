<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactForm extends FormRequest
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
            //
            'last_name' => 'required|string|max:20',
            'first_name' => 'required|string|max:20',
            'tel' => 'required|string|max:11',
            'email' => 'required|email|max:255',
            'title' => 'required|string|max:100',
            'contact' => 'required|string|max:200',


        ];
    }
}
