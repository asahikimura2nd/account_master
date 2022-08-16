<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Rules\tel_check;
use App\Rules\postcode_check;

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
        Validator::extend('user_tel',[tel_check::class,'passes']);
        Validator::extend('user_postcode',[postcode_check::class,'passes']);
    }
}
