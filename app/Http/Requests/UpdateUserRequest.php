<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;

class UpdateUserRequest extends FormRequest
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
        $rules = [
            'name' => 'required|string',
            'website' => 'string|nullable',
            'description' => 'string|nullable',
            'image' => 'image|nullable',
            'password' => 'nullable',
            'role' => 'required|integer',

        ];
        return $rules;
    }
}
