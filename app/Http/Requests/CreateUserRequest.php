<?php

namespace App\Http\Requests;


use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use App\User;

class CreateUserRequest extends FormRequest
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
        return User::$rules;
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

    protected function formatErrors(Validator $validator)
    {
        toastr()->error('Your Error Message');

        return $validator->errors()->all();
    }
}
