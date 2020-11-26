<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FurnizorCreateRequest extends FormRequest
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
            'denumire_furnizor'=>'required|max:255',
        ];
    }

    public function messages(){
        return[
            'denumire_furnizor.max'=> 'Denumirea furnizorului nu poate depasi 255 de caractere.',
            

        ];
    }
}
