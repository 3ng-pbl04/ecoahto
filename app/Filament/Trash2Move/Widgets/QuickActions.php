<?php

namespace App\Filament\Trash2Move\Widgets;


use Filament\Widgets\Widget;

class QuickActions extends Widget
{
    protected static string $view = 'filament.trash2move.widgets.quick-actions';

    public function getColumnSpan(): int|string|array
    {
        return 'full';
    }
}
