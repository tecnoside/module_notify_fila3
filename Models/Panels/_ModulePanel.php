<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Panels;

<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Cms\Models\Panels\XotBasePanel;
=======
use Modules\Xot\Models\Panels\XotBasePanel;
>>>>>>> d27db1b (.)
=======
use Modules\Cms\Models\Panels\XotBasePanel;
>>>>>>> 56255db (up)

/**
 * Class _ModulePanel.
 */
<<<<<<< HEAD
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
=======
            new Actions\TrySendNotificationAction(),
>>>>>>> 745fe6e (up)
            // new Actions\TryAlertAction(),
>>>>>>> df8079b (up)
=======
            new Actions\TrySendNotificationAction(),
            // new Actions\TryThemeNotificationAction(),
            // new Actions\TryAlertAction(),
>>>>>>> fe06862 (.)
=======
class _ModulePanel extends XotBasePanel {
    public function actions(): array {
        return [
<<<<<<< HEAD
            new Actions\TestSmsAction(),
            new Actions\TestMailAction(),
<<<<<<< HEAD
>>>>>>> d27db1b (.)
=======
=======
            new Actions\TrySmsAction(),
            new Actions\TryMailAction(),
>>>>>>> 5b257fb (up)
            new Actions\TrySendMailAction(),
<<<<<<< HEAD
>>>>>>> b1dceab (up)
=======
            new Actions\TryAlertAction(),
>>>>>>> ad42f9a (up)
=======
            //new Actions\TryAlertAction(),
>>>>>>> e2733fc (.)
=======
            // new Actions\TryAlertAction(),
>>>>>>> 06bf12b (up)
        ];
    }
}
