<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /**
     * Get the session that has the room.
     */
    public function session()
    {
        return $this->belongsTo('App\Session');
    }
}
