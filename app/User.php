<?php

namespace App;

use App\Notifications\PasswordResetRequest;
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
        'password',
        'approved_at',
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

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PasswordResetRequest($token));
    }


}
