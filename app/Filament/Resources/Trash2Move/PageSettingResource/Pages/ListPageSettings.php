<?php

namespace App\Filament\Resources\Trash2Move\PageSettingResource\Pages;

use App\Filament\Resources\Trash2Move\PageSettingResource;
use Filament\Resources\Pages\Page;
use Illuminate\Support\Facades\Redirect;

class ListPageSettings extends Page
{
    protected static string $resource = PageSettingResource::class;

    protected static string $view = 'filament.pages.redirect'; // kosong saja view

    public function mount()
    {
        $firstRecord = PageSettingResource::getModel()::first();

        if ($firstRecord) {
            $this->redirect(PageSettingResource::getUrl('edit', ['record' => $firstRecord->id]));
        } else {
            $this->redirect(PageSettingResource::getUrl('create'));
        }
    }
}
