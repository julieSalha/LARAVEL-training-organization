<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    /**
     * Get the teacher that has the session.
     */
    public function teacher()
    {
        return $this->hasOne('App\User', 'teacher_id');
    }
}
