<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    /**
     * Grade and teacher relation
     */

    public function user()
    {
        return $this->hasOne('App/User', 'id', 'user_id');
    }

    /**
     * Report and session relation
     */

    public function session()
    {
        return $this->hasOne('App\Session', 'id', 'session_id');
    }
}
