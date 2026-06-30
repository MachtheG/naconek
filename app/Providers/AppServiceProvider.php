<?php

namespace App\Providers;

use App\Models\Tender;
use App\Models\Career;
use App\Observers\TenderObserver;
use App\Observers\CareerObserver;
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
        // Wire up background auditing listeners for our core tables
        Tender::observe(TenderObserver::class);
        Career::observe(CareerObserver::class);
    }
}