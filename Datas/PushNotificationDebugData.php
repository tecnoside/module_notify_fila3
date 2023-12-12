<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Str;
use Kreait\Firebase\Messaging\MulticastSendReport;
use Kreait\Firebase\Messaging\SendReport;
use Modules\Notify\Contracts\CanReceivePushNotifications;
use Modules\Notify\Contracts\MobilePushNotification;
use Spatie\LaravelData\Data;

final class PushNotificationDebugData extends Data implements Arrayable
{
    public function __construct(
        private readonly CanReceivePushNotifications $notifiable,
<<<<<<< HEAD
        private readonly MobilePushNotification $notification,
        private readonly MulticastSendReport $sendReport,
=======
        private readonly MobilePushNotification      $notification,
        private readonly MulticastSendReport         $sendReport,
>>>>>>> b82a5c5 (ADD Firebase cloud messaging SDK integration and custom notification channel instance)
    ) {
    }

    public static function make(
        CanReceivePushNotifications $notifiable,
<<<<<<< HEAD
        MobilePushNotification $notification,
        MulticastSendReport $sendReport,
    ): self {
=======
        MobilePushNotification      $notification,
        MulticastSendReport         $sendReport,
    ): self
    {
>>>>>>> b82a5c5 (ADD Firebase cloud messaging SDK integration and custom notification channel instance)
        return new self(
            $notifiable,
            $notification,
            $sendReport,
        );
    }

    public function toArray(): array
    {
        return [
            'notifiable' => $this->notifiable->getKey(),
            'notifiable_type' => Str::of($this->notifiable::class)->classBasename(),
            'tokens' => $this->notifiable->getMobileDeviceTokens()->toArray(),
            'notification_payload' => $this->notification->toArray(null),
            'response' => [
                'total' => $this->sendReport->count(),
                'successes' => $this->sendReport->successes()->count(),
                'failures' => $this->sendReport->failures()->count(),
                'successes_tokens' => $this->sendReport->successes()
<<<<<<< HEAD
                    ->map(static fn (SendReport $report): array => [
=======
                    ->map(fn (SendReport $report) => [
>>>>>>> b82a5c5 (ADD Firebase cloud messaging SDK integration and custom notification channel instance)
                        'type' => $report->target()->type(),
                        'value' => $report->target()->value(),
                    ]),
                'failure_tokens' => $this->sendReport->failures()
<<<<<<< HEAD
                    ->map(static fn (SendReport $report): array => [
=======
                    ->map(fn (SendReport $report) => [
>>>>>>> b82a5c5 (ADD Firebase cloud messaging SDK integration and custom notification channel instance)
                        'type' => $report->target()->type(),
                        'value' => $report->target()->value(),
                    ]),
                'unknown_tokens' => $this->sendReport
<<<<<<< HEAD
                    ->filter(static fn (SendReport $report): bool => $report->messageWasSentToUnknownToken())
                    ->map(static fn (SendReport $report): array => [
=======
                    ->filter(fn (SendReport $report) => $report->messageWasSentToUnknownToken())
                    ->map(fn (SendReport $report) => [
>>>>>>> b82a5c5 (ADD Firebase cloud messaging SDK integration and custom notification channel instance)
                        'type' => $report->target()->type(),
                        'value' => $report->target()->value(),
                    ]),
                'results' => $this->sendReport
<<<<<<< HEAD
                    ->map(static fn (SendReport $report): array => [
=======
                    ->map(fn (SendReport $report) => [
>>>>>>> b82a5c5 (ADD Firebase cloud messaging SDK integration and custom notification channel instance)
                        'target' => $report->target()->value(),
                        'result' => $report->result(),
                    ]),
            ],
        ];
    }
}
