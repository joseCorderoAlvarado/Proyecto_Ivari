<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class subidaFotoRequest extends FormRequest
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
            'nombreproducto' => 'required'
        ];
		$photos = count($this->input('fotos'));
        foreach(range(0, $photos) as $index) {
            $rules['photos.' . $index] = 'image|mimes:jpeg,bmp,png|';
        }

        return $rules;
		
    }
}
