<?php

namespace Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Modules\Notify\Filament\Resources\NotifyThemeResource;

class ListNotifyThemes extends ListRecords
{
    protected static string $resource = NotifyThemeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
