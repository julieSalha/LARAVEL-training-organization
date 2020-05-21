<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    //
    public function room()
    {
        return $this->hasOne('App\Room', 'room_id');
    }

    //
    public function teacher()
    {
        return $this->hasOne('App\Teacher', 'teacher_id');
    }

    //
    public function training()
    {
        return $this->hasOne('App\Training', 'training_id');
    }
}
