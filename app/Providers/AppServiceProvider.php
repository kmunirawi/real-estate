<?php

namespace App\Providers;

use App\Models\Property;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
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
        Paginator::useBootstrapFour();
        $latestProperties = Property::orderBy('id', 'desc')->limit(5)->get();
        $randomProperties = Property::inRandomOrder()->limit(3)->get();

        View::share([
            'latestProperties' => $latestProperties,
            'randomProperties' => $randomProperties,
        ]);
    }
}
