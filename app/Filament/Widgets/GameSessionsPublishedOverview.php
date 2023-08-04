<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class GameSessionsPublishedOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Draft', \App\Models\GameSession::query()->where('status', 'draft')->count()),
            Stat::make('Published', \App\Models\GameSession::query()->where('status', 'published')->count()),
        ];
    }
}
