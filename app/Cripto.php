<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cripto extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'code', 'symbol', 'base','quote', 'price', 'site'
    ];

    /**
     * The relationship
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
