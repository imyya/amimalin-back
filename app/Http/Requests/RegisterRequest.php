<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed',
            'firstname'=> 'required|string|max:255',
            'lastname'=> 'required|string|max:255',
            'phone'=> 'required|string|max:255',
            'postalcode'=> 'required|string|max:255',
            'validationCGV' => 'required|accepted',

            // 'latitude' => 'required|numeric', // Validation pour latitude
            // 'longitude' => 'required|numeric', // Validation pour longitude

        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'La civilite est obligatoire.',
            'name.required' => 'Le nom est obligatoire.',
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être un format valide.',
            'email.unique' => 'L\'email est déjà utilisé.',
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.min' => 'Le mot de passe doit contenir au moins :min caractères.',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
            'firstname.required' => 'Le prenom est obligatoire.',
            'lastname.required' => 'Le nom est obligatoire.',
            'phone.required' => 'Le telephone est obligatoire.',
            'postalcode.required' => 'Le code postal est obligatoire.',
            'validationCGV.required' => 'Vous devez accepter les CGV.',

        ];
    }

}
