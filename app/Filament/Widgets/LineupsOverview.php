<?php

namespace App\Filament\Widgets;

use App\Models\Lineup;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class LineupsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Totaal aantal DJS', Lineup::count())
                ->description('Alle DJS in het systeem')
                ->descriptionIcon('heroicon-m-calendar')
                ->color('success'),
        ];
    }
}
