<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

/**
 * Class User
 * @package App
 * @version May 19, 2020, 3:41 am UTC
 *
 * @property string $first_name
 * @property string $last_name
 * @property string $cin
 * @property string $credit_card_number
 * @property string $email
 * @property string $password
 */
class User extends Authenticatable
{
    use SoftDeletes, Notifiable, HasRoles;

    public $table = 'users';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'first_name',
        'last_name',
        'cin',
        'credit_card_number',
        'email',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'cin' => 'string',
        'credit_card_number' => 'string',
        'email' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'cin' => 'required|string|digits:8',
        'credit_card_number' => 'required|string|digits:16',
        'email' => 'required|email|max:255|unique:users,email,NULL,id,deleted_at,NULL',
        'password' => 'required|string|min:8',
        'role' => 'required|string'
    ];


    // Get CIN String
    public function getCIN()
    {
       return '**** *'. substr ($this->cin, -3);
    }

    // Get credit card number
    public function getCreditCardNumber()
    {
        return '**** **** **** '. substr ($this->credit_card_number, -4);
    }


}
