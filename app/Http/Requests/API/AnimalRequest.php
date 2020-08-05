<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class AnimalRequest extends FormRequest
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
            "name" => ["required", "string"],
            "species" => ["required", "string"],
            "date_of_birth" => ["required", "string"],
            "weight" => ["required", "numeric"],
            "height" => ["required", "numeric"],
            "biteyness" => ["required", "numeric"],
            "treatments" => ["required", "array"], // check treatments is an array
            "treatments.*" => ["string", "max:30"], // check members of treatments are strings
            "owner_id" => ["required", "numeric"],
        ];
        // return [
        //     "name" => ["required", "string"],
        //     "species" => ["required", "string"],
        //     "date_of_birth" => ["required", "string"],
        //     "weight" => ["required", "int"],
        //     "height" => ["required", "numeric"],
        //     // "biteyness" => ["required", "int"]
        // ];
    }
}
