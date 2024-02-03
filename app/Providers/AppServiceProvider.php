<?php

namespace App\Providers;

use App\Services\ApplicationService;
use Illuminate\Support\ServiceProvider;
use App\Services\Interfaces\ApplicationServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ApplicationServiceInterface::class,
            ApplicationService::class);

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
