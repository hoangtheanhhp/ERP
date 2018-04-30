<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

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
        return [
            'name' => 'required|regex: /^[\p{L}\s\'.-]+$/',
            'email' => 'required|unique:users,email,'.$this->route()->parameter('user'),
            'password' => 'required|string|min:6|confirmed',
            'birthday' => 'required|date|before:now',
            'address' => 'required|max:255',
        ];
    }
}
