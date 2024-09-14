<?php

namespace App\Providers;

use App\Repositories\JobListingRepository;
use App\Repositories\JobListingRepositoryInterface;
use App\Services\JobListingService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(JobListingRepositoryInterface::class, JobListingRepository::class);
        $this->app->bind(JobListingService::class, function ($app) {
            return new JobListingService($app->make(JobListingRepositoryInterface::class));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}