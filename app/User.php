<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'hitbtc_public_key', 'hitbtc_private_key', 'balance'
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
     * The relationship
     */
    public function criptos()
    {
        return $this->belongsToMany('App\Cripto')->as('wallet')->withPivot('amount')->withTimestamps();
    }

    public function scopeActiveClient($query)
    {
        return $query->where('active_client', true);
    }
}
