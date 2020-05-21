<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    //
    public function training()
    {
        return $this->belongsTo('App\Session');
    }
}
