<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

class UserRequest extends FormRequest
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
        if($this->isMethod('POST')) {
            return [
                'name' => ['required', 'string'],
                'username' => ['required', 'string', 'unique:users'],
                'email' => ['required', 'email', 'unique:users'],
                'password' => 'required | confirmed | min:6'
            ];
        }
        else {
            return [
                'name' => ['required', 'string'],
                'username' => ['required', 'string', 'unique:users'],
                'email' => ['required', 'email', 'unique:users'],
                'password' => []
            ];
        }
    }
}