<?php

declare(strict_types=1);

namespace Modules\Notify\Actions;

use Modules\Notify\Data\SmsData;
use Spatie\QueueableAction\QueueableAction;

class EsendexSendAction {
    use QueueableAction;

    public function __construct() {
    }

    /**
     * Execute the action.
     */
    public function execute(SmsData $sms): array {
        return [];
    }
}
