<?php

namespace App\Providers;

use App\Interface\LaboratoryInterface;
use App\Repositories\LaboratoryRepositories;
use App\Repositories\PatientRepositories;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PatientRepositories::class, PatientRepositories::class);
        $this->app->bind(LaboratoryInterface::class, LaboratoryRepositories::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
