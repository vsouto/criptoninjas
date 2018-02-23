<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'short', 'word', 'description'
    ];


    /**
     * The relationship
     */
    public function plan()
    {
        return $this->belongsToMany('App\Plan')->withPivot('last_activation')->withTimestamps();
    }

}
