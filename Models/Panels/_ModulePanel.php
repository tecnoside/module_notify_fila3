<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Panels;

use Modules\Cms\Models\Panels\XotBasePanel;

/**
 * Class _ModulePanel.
 */
class _ModulePanel extends XotBasePanel
{
    public function actions(): array
    {
        return [
            new Actions\TrySmsAction(),
            new Actions\TryMailAction(),
            new Actions\TrySendMailAction(),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 42aa20e (.)
=======
>>>>>>> 3a62aee (up)
=======
            new Actions\TryAlertAction(),
>>>>>>> 626ce4c (up)
=======
            //new Actions\TryAlertAction(),
>>>>>>> a5593ab (.)
=======
=======
            new Actions\TrySendNotificationAction(),
>>>>>>> 0cbdb01 (up)
            // new Actions\TryAlertAction(),
>>>>>>> df8079b (up)
=======
            new Actions\TrySendNotificationAction(),
            // new Actions\TryThemeNotificationAction(),
            // new Actions\TryAlertAction(),
>>>>>>> fe06862 (.)
        ];
    }
}
