<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    /**
     * Get the training of the session.
     */
    public function training()
    {
        return $this->hasOne('App\Training', 'id','training_id');
    }

    /**
     * Get the room that has the session.
     */
    public function room()
    {
        return $this->hasOne('App\Room', 'id', 'room_id');
    }

    /**
     * Get the teacher that has the session.
     */
    public function teacher()
    {
        return $this->hasOne('App\Teacher', 'id', 'teacher_id');
    }

    /**
     * Get the report that has the session.
     */
    public function report()
    {
        return $this->hasOne('App\Report');
    }

    /**
     * Get the grade that has the session.
     */
    public function grade()
    {
        return $this->hasMany('App\Grade');
    }
}
