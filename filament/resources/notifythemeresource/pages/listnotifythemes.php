<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Modules\Notify\Filament\Resources\NotifyThemeResource;
=======
namespace Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
<<<<<<< HEAD
>>>>>>> 911eb41 (up)
=======
use Modules\Notify\Filament\Resources\NotifyThemeResource;
>>>>>>> 42f9249 (.)

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
