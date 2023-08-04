<?php

namespace App\Providers;

use App\Models\PersonalInformation;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Should return TRUE or FALSE
        Gate::define('writer', function(User $user) {
            return $user->role == 'writer';
        });
        Gate::define('owner', function(User $user) {
            return $user->role == 'owner';
        });

    }
}
