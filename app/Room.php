<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    public function session()
    {
        return $this->belongsTo('App\Session');
    }
}
