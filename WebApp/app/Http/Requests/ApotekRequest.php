<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApotekRequest extends FormRequest
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
                'picture' => ['required', 'image', 'mimes:jpeg,png,jpg'],
                'address' => ['required', 'string'],
                'jam_operasi' => ['required', 'string'],
                'telp' => ['required', 'string'],
            ];
        }
        else {
            return [
                'name' => ['string'],
                'picture' => [],
                'address' => ['required', 'string'],
                'ajam_operasi' => ['required', 'string'],
                'telp' => ['required', 'string'],
            ];
        }
    }
}