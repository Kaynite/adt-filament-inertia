<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use App\Models\Project;
use App\Models\TeamMember;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Number of Posts', Post::count())
                ->icon('heroicon-o-newspaper')
                ->description('Description Will Appear Here'),
            Stat::make('Our Projects', Project::count())
                ->icon('heroicon-o-presentation-chart-bar')
                ->color('success'),
            Stat::make('Our Team Members', TeamMember::count())
                ->icon('heroicon-o-users')
                ->color('success'),
        ];
    }
}
