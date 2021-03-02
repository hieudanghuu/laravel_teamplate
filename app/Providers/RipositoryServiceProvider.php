<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\UserProfile;
use App\Repositories\User\UserInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\UserProfile\UserProfileInterface;
use App\Repositories\UserProfile\UserProfileRepository;


class RipositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(UserInterface::class, UserRepository::class);
        $this->app->bind(UserProfileInterface::class, UserProfileRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
