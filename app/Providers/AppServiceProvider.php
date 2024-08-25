<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

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
        Collection::macro('even' , function(){
            return $this->filter(function($value) {
                return $value % 2 === 0;
            });
        });

        Collection::macro('odd' , function() {
            return $this->filter(function($value) {
                return $value % 2 !== 0;
            });
        });

    }
}
