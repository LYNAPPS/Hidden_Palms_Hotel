<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;
use Shetabit\Visitor\Models\Visit;

class VisitorStats extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        $visitors = Visit::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))
            ->groupBy('date')
            ->orderBy('date', 'desc')
            ->take(7)
            ->get();

        // dd($visitors);
        return [
            'visitors' => $visitors,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
