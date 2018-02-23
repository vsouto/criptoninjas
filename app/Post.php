<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    /**
     * Get the phone record associated with the user.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * Get the phone record associated with the user.
     */
    public function author()
    {
        return $this->belongsTo('App\User');
    }

}
