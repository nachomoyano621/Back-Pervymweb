<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\Contracts\DomicilioRepositoryInterface;
use App\Repository\Contracts\UserRepositoryInterface;
use App\Repository\UserRepository;
use App\Repository\Contracts\PersonaRepositoryInterface;
use App\Repository\PersonaRepository;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DomicilioRepositoryInterface::class,DomicilioRepository::class);
        $this->app->bind(UserRepositoryInterface::class,UserRepository::class);
        $this->app->bind(PersonaRepositoryInterface::class,PersonaRepository::class);
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
