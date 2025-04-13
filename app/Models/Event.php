<?php

namespace App\Models;

use App\Enums\EventGenre;
use App\Enums\EventStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'slug',
        'date',
        'location',
        'genre',
        'ticket_count',
        'status',
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($event) {
            $event->slug = Str::slug($event->name);
        });

        static::updating(function ($event) {
            $event->slug = Str::slug($event->name);
        });
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }



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
