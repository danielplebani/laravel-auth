<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'name' => 'required|min:2|max:100',
            'content' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Il nome del progetto è obbligatorio!',
            'name.min' => 'Il nome del progetto deve avere almeno 2 caratteri!',
            'name.max' => 'Il nome del progetto può avere massimo 100 caratteri!',
            'content.required' => "la descrizione è obbligatoria!",
        ];
    }
}
