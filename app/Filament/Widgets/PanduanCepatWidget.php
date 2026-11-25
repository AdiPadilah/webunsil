<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class PanduanCepatWidget extends Widget
{
    protected static ?int $sort = 1;

    protected int | string | array $columnSpan = 'full';

    /**
     * @var view-string
     */
    protected string $view = 'filament.widgets.panduan-cepat';
}
