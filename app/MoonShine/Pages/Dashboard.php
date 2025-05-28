<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use MoonShine\MenuManager\Attributes\SkipMenu;
use MoonShine\Apexcharts\Components\DonutChartMetric;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Pages\Page;

#[SkipMenu]
class Dashboard extends Page
{
    /**
     * @return array<string, string>
     */
    public function getBreadcrumbs(): array
    {
        return [
            '#' => $this->getTitle()
        ];
    }

    public function getTitle(): string
    {
        return $this->title ?: 'Dashboard';
    }

    /**
     * @return list<ComponentContract>
     */
    protected function components(): iterable
    {
        return [
            DonutChartMetric::make('Tasks')
                ->values(['New' => 234, 'Done' => 421])
                ->columnSpan(6)
        ];
    }
}
