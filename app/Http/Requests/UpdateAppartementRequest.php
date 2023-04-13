<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAppartementRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        
            //
            return [
                //
                'localisation'=>'',
                'name_appartement'=>'',
                'city'=>'',
                'description'=>'',
                'images.*' => '|image|mimes:jpeg,png,jpg,gif,svg',
                'prix'=>'',
                'caracteristique'=>'',
                'nombrePersonne'=>'',
                'nombreChambre'=>'',
                'espaces'=>'',
                'date'=>''
                
        
        ];
    }
}
