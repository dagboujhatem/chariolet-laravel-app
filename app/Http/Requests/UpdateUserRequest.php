<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;

class UpdateUserRequest extends FormRequest
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
        $rules = User::$rules;
        $rules['email'] = 'required|unique:users,email,' .$this->route("user"). ',id,deleted_at,NULL';
        $rules['password'] = '';
        dd($rules);
        return $rules;
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
