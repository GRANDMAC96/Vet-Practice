<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OwnerRequest extends FormRequest
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
            "first_name" => ["required", "string", "max:100"],
            "last_name" => ["required", "string", "max:100"],
            "address_1" => ["required", "string", "max:100"],
            "address_2" => ["required", "string", "max:100"],
            "town" => ["required", "string", "max:100"],
            "postcode" => ["required", "string", "max:100"],
            "telephone" => ["required", "string", "max:100"],
        ];
    }
}
