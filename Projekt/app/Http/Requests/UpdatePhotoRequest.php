<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePhotoRequest extends FormRequest
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
            'name' => 'required|max:20|unique:photos,name,'.$this->photo->id,
            'description' => 'required|max:50',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/|max:6',
            'photographer_id' => 'required|numeric|exists:photographers,id'
        ];
    }
}
