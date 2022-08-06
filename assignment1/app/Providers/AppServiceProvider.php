<?php

namespace App\Providers;

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
         // Dao Registration
         $this->app->bind('App\Contracts\Dao\User\UserDaoInterface', 'App\Dao\User\UserDao');
         $this->app->bind('App\Contracts\Dao\Language\LanguageDaoInterface', 'App\Dao\Language\LanguageDao');
 
         // Business Logic Registration
         $this->app->bind('App\Contracts\Services\User\UserServiceInterface', 'App\Services\User\UserService');
         $this->app->bind('App\Contracts\Services\Language\LanguageServiceInterface', 'App\Services\Language\LanguageService');
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
