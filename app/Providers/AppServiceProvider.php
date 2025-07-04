<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\{ResetPassword, VerifyEmail};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Включаем строгий режим для моделей
        Model::shouldBeStrict();

        ResetPassword::createUrlUsing(
            fn(object $notifiable, string $token): string => config(
                    'app.frontend_url'
                ) . "/reset-password/$token?email={$notifiable->getEmailForPasswordReset()}"
        );

        VerifyEmail::createUrlUsing(function (object $notifiable): string {
            $verificationUrl = URL::temporarySignedRoute(
                'verification.verify',
                Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
                [
                    'id' => $notifiable->getKey(),
                    'hash' => sha1($notifiable->getEmailForVerification()),
                ]
            );

            return config('app.frontend_url') . "?verification_url=" . $verificationUrl;
        });
    }
}
