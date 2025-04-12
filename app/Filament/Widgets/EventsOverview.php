<?php

namespace App\Filament\Widgets;

use App\Models\Event;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class EventsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Totaal aantal events', Event::count())
                ->description('Alle events in het systeem')
                ->descriptionIcon('heroicon-m-calendar')
                ->color('success'),
        ];
    }
}
