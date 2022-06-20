<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObatApotekRequest extends FormRequest
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
                'apotek_id' => ['required', 'int'],
                'image' => ['required', 'image', 'mimes:jpeg,png,jpg'],
                'harga' => ['required', 'int'],
                'qty' => ['required', 'int'],
            ];
        }
        else {
            return [
                'nama_obat' => ['string'],
                'apotek_id' => ['required', 'int'],
                'image' => [],
                'harga' => ['required', 'int'],
                'qty' => ['required', 'int'],
            ];
        }
    }
}