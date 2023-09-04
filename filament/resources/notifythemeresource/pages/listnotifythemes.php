<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Modules\Notify\Filament\Resources\NotifyThemeResource;
=======
namespace Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;

use Modules\Notify\Filament\Resources\NotifyThemeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
>>>>>>> 911eb41 (up)

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
