<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lineup extends Model
{
    use HasFactory;

    protected $fillable = ['event_id', 'artist', 'start_time', 'end_time'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
