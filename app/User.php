<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends \TCG\Voyager\Models\User
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
    public function plans()
    {
        return $this->belongsToMany('App\Plan')->withPivot('last_activation','income_result')->withTimestamps()->orderBy('last_activation','DESC');
    }

    /**
     * The relationship
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    /**
     * The relationship
     */
    public function criptos()
    {
        return $this->belongsToMany('App\Cripto')->as('wallet')->withPivot('amount')->withTimestamps();
    }

    public function scopeActiveClient($query)
    {
        return $query;
        //return $query->where('balance','<>' ,'0');
    }

    /**
     * Get last activated plan for a user
     *
     * @param $value
     * @return mixed
     */
    public function getLastActivatedPlanAttribute($value)
    {
        return Auth::user()->plans->take(1)->first();
    }
}
