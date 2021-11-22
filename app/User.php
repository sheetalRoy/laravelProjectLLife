<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public static function hashMail($mail)
    {
        return hash_hmac('sha256', $mail, config('app.key'));
    }

    /**
     * Find or fail to get first user by code
     *
     * @param $code Code to search for
     * @return User|\Illuminate\Database\Eloquent\Model
     */
    public static function byCode($code)
    {
        return static::where('code', $code)->firstOrFail();
    }
}
