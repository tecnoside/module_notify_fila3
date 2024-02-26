<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Pages;

use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Kreait\Firebase\Messaging\CloudMessage;
use Modules\Notify\Datas\EmailData;
use Modules\Notify\Emails\EmailDataEmail;
use Modules\User\Models\DeviceUser;
use Modules\Xot\Datas\XotData;

/**
 * @property ComponentContainer $notificationForm
 */
class SendPushNotification extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $notificationData = [];

    // protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static ?string $navigationIcon = 'heroicon-o-paper-airplane';

    protected static string $view = 'notify::filament.pages.send-push-notification';

    public function mount(): void
    {
        $this->fillForms();
    }

    public function notificationForm(Form $form): Form
    {
        $profileClass = XotData::make()->getProfileClass();

        $devides = DeviceUser::with(['profile', 'device'])
            ->where('push_notifications_token', '!=', null)
            ->where('push_notifications_enabled', 1)
            ->get();

        dddx($devides);
        $to = [
        ];

        return $form
            ->schema(
                [
                    Forms\Components\Select::make('to')
                        ->options($to),
                    Forms\Components\RichEditor::make('body')
                        ->required(),
                ]
            )
            // ->model($this->getUser())
            ->statePath('notificationData');
    }

    public function sendNotification(): void
    {
        $data = $this->notificationForm->getState();
        // json key is missing the client_email field

        $messaging = app('firebase.messaging');
        /*
        $deviceToken = 'esG_c14XSBiYSJ6qYpyAtP:APA91bGKC8Vpi94RYnHGu4Bua3dH-BBPI_D6fszHHdJbCohDTY_CbYOB7So4mjiE85S8Sm6HYvofvqHpCanHbsq11aKCW8Ln4K7nvQ3cfStD4uwWZj3fAe5fwGVk60NCr_ssqQBnkEFY';
        $message = CloudMessage::withTarget('token', $deviceToken)
            ->withNotification(Notification::create('Title', 'Body'))
            ->withData(['key' => 'value']);

        $messaging->send($message);
        */
        $user = \Modules\User\Models\User::first();

        /*
        $email_data = EmailData::from($data);

        Mail::to($data['email_to'])->send(
            new EmailDataEmail($email_data)
        );
        */
        Notification::make()
            ->success()
            // ->title(__('filament-panels::pages/auth/edit-profile.notifications.saved.title'))
            ->title(__('check your client'))
            ->send();
    }

    protected function getForms(): array
    {
        return [
            'notificationForm',
        ];
    }

    protected function getNotificationFormActions(): array
    {
        return [
            Action::make('notificationFormActions')
                // ->label(__('filament-panels::pages/auth/edit-profile.form.actions.save.label'))
                ->label(__('send'))
                ->submit('notificationFormActions'),
        ];
    }

    protected function getUser(): Authenticatable&Model
    {
        $user = Filament::auth()->user();

        if (! $user instanceof Model) {
            throw new \Exception('The authenticated user object must be an Eloquent model to allow the profile page to update it.');
        }

        return $user;
    }

    protected function fillForms(): void
    {
        // $data = $this->getUser()->attributesToArray();

        // $this->editProfileForm->fill($data);
        $this->notificationForm->fill();
    }
}
