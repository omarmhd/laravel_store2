<?php

namespace App\Http\Requests\API;

use App\Models\User;
use InfyOm\Generator\Request\APIRequest;

class UpdateUserAPIRequest extends APIRequest
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
        $rules = User::$rules;
        $rules['email'] = $rules['email'].",".$this->route("user");$rules['mobile'] = $rules['mobile'].",".$this->route("user");
        return $rules;
    }
}
