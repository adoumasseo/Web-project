<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'naissance' => 'required|date',
            'tel' => 'required',
            'naissance_acte' => 'required|file',
            'photo' => 'required|file|size: ',
            'certificat_medical' => 'required|file|max:5000',
            'serie' => 'required',
            'login' => 'required',
            'password' => 'required|min:8'
        ];
    }
}
