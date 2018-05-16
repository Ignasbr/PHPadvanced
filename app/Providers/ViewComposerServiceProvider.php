<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('vendor.adminlte.partials.user-posts', function ($view) {
            $view->with('post_count', auth()->user()->posts->count());
            $view->with('posts', auth()->user()->posts);
        });

        View::composer('vendor.adminlte.partials.user-comments', function ($view) {
            $view->with('comments_count', auth()->user()->comments->count());
            $view->with('comments', auth()->user()->comments);
        });
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
