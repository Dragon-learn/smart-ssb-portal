<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SSB extends Model
{
    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function trainingSchedules()
    {
        return $this->hasMany(TrainingSchedule::class);
    }
}
