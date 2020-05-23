<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /**
     * Get the session that has the teacher.
     */
    public function session()
    {
        return $this->belongsTo('App\Session');
    }
}
