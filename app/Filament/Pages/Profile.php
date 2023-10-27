<?php

namespace App\Filament\Pages;

use Closure;
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Support\Exceptions\Halt;
use Illuminate\Support\Facades\Hash;

class Profile extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.profile';

    protected static ?string $slug = 'profile';

    protected static ?string $title = 'Profile';

    public ?array $profileData = [];
    public ?array $passwordData = [];

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }

    public function mount(): void
    {
        $user = auth()->user();

        $this->updateProfileForm->fill([
            'name' => $user->name,
            'email' => $user->email,
        ]);

        $this->changePasswordForm->fill([
            'old_password' => null,
            'new_password' => null,
            'new_password_confirmation' => null,
        ]);
    }

    public function updateProfileForm(Form $form): Form
    {
        return $form
            ->schema(([
                TextInput::make('name')->required()->maxLength(255),
                TextInput::make('email')->required()->email()->maxLength(255),
            ]))
            ->statePath('profileData');
    }

    public function changePasswordForm(Form $form): Form
    {
        return $form
            ->schema(([
                TextInput::make('old_password')->required()->maxLength(255)->password()
                    ->rules([
                        function () {
                            return function (string $attribute, $value, Closure $fail) {
                                if (! Hash::check($value, auth()->user()->password)) {
                                    $fail('The old password is incorrect.');
                                }
                            };
                        },
                    ]),
                TextInput::make('new_password')->required()->maxLength(255)->password()->confirmed(),
                TextInput::make('new_password_confirmation')->required()->maxLength(255)->password(),
            ]))
            ->statePath('passwordData');
    }

    public function getForms(): array
    {
        return [
            'updateProfileForm',
            'changePasswordForm',
        ];
    }

    public function saveProfile()
    {
        try {
            $data = $this->updateProfileForm->getState();

            auth()->user()->update($data);

            Notification::make()
                ->success()
                ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
                ->send();
        } catch (Halt $exception) {
            return;
        }
    }

    public function updatePassword()
    {
        try {
            $data = $this->changePasswordForm->getState();

            auth()->user()->update([
                'password' => Hash::make($data['new_password']),
            ]);

            Notification::make()
                ->success()
                ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
                ->send();
        } catch (Halt $exception) {
            return;
        }
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }
}
