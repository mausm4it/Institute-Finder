<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Course;
use App\Models\Page;
use App\Models\SubCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;

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
        if(Schema::hasTable('settings')){
            View::share('settings', Setting::find(1));
        }

        if(Schema::hasTable('categories')){
            View::share('categories', Category::all());
        }
        if(Schema::hasTable('sub_categories')){
            View::share('sub_categories', SubCategory::all());
        }

        if(Schema::hasTable('courses')){
            View::share('courses', Course::take(8)->get());
        }

        if(Schema::hasTable('pages')){
            View::share('pages', Page::take(5)->get());
        }
       
    }
}