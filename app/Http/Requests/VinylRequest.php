<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VinylRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3',
            'artist'=> 'required|max:30',
            'price' => 'required|numeric',
            'cover' => 'image|mimes:jpeg,png,jpg,webp',
            'description' => 'required|max:400',
        ];
    }

    public function messages(){
        
        return[
        'title.required' => 'Inserisci il titolo del Album',
        'title.min' => 'Il titolo deve contenere almeno 3 caratteri',
        'artist.required' => 'Inserisci il nome dell\'artista',
        'price.required' => 'Inserisci prezzo',
        'cover.image'    => 'Il file deve essere un\'immagine',
        'description.required' => 'Campo obbligatorio max 400 caratteri' ,
        'description.max' => 'Descrizione Max 400 caratteri'
         
        ];
    }
}
