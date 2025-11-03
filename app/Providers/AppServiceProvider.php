<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;
use App\Support\JsonLdBuilder;

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
        View::composer('*', function ($view) {
            $globalJsonLd = [
                JsonLdBuilder::organization(),
                JsonLdBuilder::website(),
            ];

            $view->with('globalJsonLd', $globalJsonLd);
        });
    }
}
