<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingsUserRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'cin' => 'required|string|digits:8',
            'credit_card_number' => 'required|string|digits:16',
            'email' => 'required|email|max:255',
            'password' => '',
            'role' => ''
        ];
    }

    public function attributes()
    {
        return [
            'first_name' => 'nom',
            'last_name' => 'prénom',
            'cin' => 'CIN',
            'credit_card_number' => 'numéro de votre carte bancaire',
            'email' => 'e-mail',
            'password' => 'mot de passe'
        ];
    }
}
