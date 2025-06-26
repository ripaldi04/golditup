<?php

namespace App\Providers;

use App\Filament\Responses\CustomLogoutResponse;
use Filament\Facades\Filament;
use Filament\Http\Responses\Auth\LogoutResponse;
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
        // $this->app->singleton(LogoutResponse::class, CustomLogoutResponse::class);
    }
}
