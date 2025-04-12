<?php

namespace App\Models;

use App\Enums\EventGenre;
use App\Enums\EventStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'date',
        'location',
        'genre',
        'ticket_count',
        'status',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'date' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'status' => EventStatus::class,
        'genre' => EventGenre::class
    ];

    public function lineups(): HasMany
    {
        return $this->hasMany(Lineup::class);
    }
}
