<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\Widget;

class QuickActions extends Widget
{
    protected static string $view = 'filament.admin.widgets.quick-actions';

    public function getColumnSpan(): int|string|array
    {
        return 'full';
    }
}
