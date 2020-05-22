<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    /**
     * Get the room that has the session.
     */
    public function room()
    {
        return $this->hasOne('App\Room', 'room_id');
    }

    /**
     * Get the teacher that has the session.
     */
    public function teacher()
    {
        return $this->hasOne('App\User', 'teacher_id');
    }

    /**
     * Get the training of the session.
     */
    public function training()
    {
        return $this->hasOne('App\Training', 'training_id');
    }
}
