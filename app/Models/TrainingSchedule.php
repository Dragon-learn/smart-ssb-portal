<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingSchedule extends Model
{
    public function ssb()
    {
        return $this->belongsTo(SSB::class);
    }
}
