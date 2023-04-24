<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePhotographerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'firstname' => 'required|max:20',
            'lastname' => 'required|max:20',
            'date_of_birth' => 'date_format:D.M.Y|before:today',
            'description' => 'required|max:511',
            'howmanysold' => 'required|numeric'
        ];
    }
}
