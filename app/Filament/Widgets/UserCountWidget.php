<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Support\Enums\IconPosition;
use App\Models\User;

class UserCountWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', User::count())
            ->description('Number of registered users')
            ->descriptionIcon('heroicon-o-users', IconPosition::Before),
        
            Stat::make('Total Admins', User::role('super_admin')->count())
            ->description('Number of registered admins')
            ->descriptionIcon('heroicon-o-users', IconPosition::Before),
        
        ];
    }
}
