<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContractCreateRequest extends FormRequest
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
            'denumire_contract'=>'required|max:255',
            'descriere_contract'=>'required|max:1000',
            
        ];
    }

    public function messages(){
        return[
            'denumire_contract.max'=> 'Denumirea contractului nu poate depasi 255 de caractere.',
            'descriere_contract.max'=> 'Descrierea contractului nu poate depasi 1000 de caractere.',

        ];
    }
}
