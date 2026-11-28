<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class WelcomeHeroWidget extends Widget
{
    protected static ?int $sort = 0;

    protected int | string | array $columnSpan = 'full';

    /**
     * @var view-string
     */
    protected string $view = 'filament.widgets.welcome-hero';
}
