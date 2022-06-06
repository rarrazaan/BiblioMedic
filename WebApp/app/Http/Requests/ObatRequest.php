<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObatRequest extends FormRequest
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
                'nama_obat' => ['required', 'string'],
                'image' => ['required', 'image', 'mimes:jpeg,png,jpg'],
                'komposisi' => ['required', 'string'],
                'khasiat' => ['required', 'string'],
                'aturanPakai' => ['required', 'string'],
                'peringatan' => ['required', 'string'],
            ];
        }
        else {
            return [
                'nama_obat' => ['string'],
                'image' => [],
                'komposisi' => ['required', 'string'],
                'khasiat' => ['required', 'string'],
                'aturanPakai' => ['required', 'string'],
                'peringatan' => ['required', 'string'],
            ];
        }
    }
}