<?php

namespace App\Enums;

enum EventStatus: string
{
    case CONCEPT = 'concept';
    case CONFIRMED = 'confirmed';
    case CANCELLED = 'cancelled';

    public static function getLabels(): array
    {
        return [
            self::CONCEPT->value => 'Concept',
            self::CONFIRMED->value => 'Bevestigd',
            self::CANCELLED->value => 'Geannuleerd'
        ];
    }

    public function label(): string
    {
        return self::getLabels()[$this->value];
    }
}
