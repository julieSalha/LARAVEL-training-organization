<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    /**
     * Get the teacher that has the training.
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'teacher_id');
    }

    /**
     * Get the session that has the training.
     */
    public function session()
    {
        return $this->belongsTo('App\Session');
    }
}
