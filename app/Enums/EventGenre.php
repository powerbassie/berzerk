<?php

namespace App\Enums;

enum EventGenre: string
{
    case HARDCORE = 'hardcore';
    case SPEEDCORE = 'speedcore';
    case TEK = 'tek';

    public static function getLabels(): array
    {
        return [
            self::HARDCORE->value => 'Hardcore',
            self::SPEEDCORE->value => 'Speedcore',
            self::TEK->value => 'Tek'
        ];
    }

    public function label(): string
    {
        return self::getLabels()[$this->value];
    }

}

