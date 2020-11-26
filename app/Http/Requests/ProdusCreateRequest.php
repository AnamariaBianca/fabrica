<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdusCreateRequest extends FormRequest
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
            'denumire_produs'=>'required|max:255',
            'descriere_produs'=>'required|max:1000',
        ];
    }

    public function messages(){
        return[
            'denumire_produs.max'=> 'Denumirea produsului nu poate depasi 255 de caractere.',
            'descriere_produs.max'=> 'Descrierea produsului nu poate depasi 1000 de caractere.',

        ];
    }
}
