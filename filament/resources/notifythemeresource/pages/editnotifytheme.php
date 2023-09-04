<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b735fbf (.)
declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\Notify\Filament\Resources\NotifyThemeResource;
=======
namespace Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
<<<<<<< HEAD
>>>>>>> 911eb41 (up)
=======
use Modules\Notify\Filament\Resources\NotifyThemeResource;
>>>>>>> 42f9249 (.)
=======
namespace Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
<<<<<<< HEAD
>>>>>>> 01564cc (up)
=======
use Modules\Notify\Filament\Resources\NotifyThemeResource;
>>>>>>> 34ed535 (.)

class EditNotifyTheme extends EditRecord
{
    protected static string $resource = NotifyThemeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
