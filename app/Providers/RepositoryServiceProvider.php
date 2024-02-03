<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ApplicationRepository;
use App\Repositories\Interfaces\ApplicationRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            ApplicationRepositoryInterface::class,
            ApplicationRepository::class
        );
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
