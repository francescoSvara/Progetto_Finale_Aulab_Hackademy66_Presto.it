<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\View;
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
        // $user = User::find(1);
        // $user->is_admin = true;
        // $user->save();

        if(\Illuminate\Support\Facades\Schema::hasTable('categories')){
         View::share('categories', Category::all());
        }
    }
}
