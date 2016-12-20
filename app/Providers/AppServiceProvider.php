<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Validator\CustomValidator;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('roster_start_date', 'App\Validator\CustomValidator@validateRosterStartDate');
        Validator::extend('roster_end_date', 'App\Validator\CustomValidator@validateRosterEndDate');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
