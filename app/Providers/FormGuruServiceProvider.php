<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Mapel;

class FormGuruServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('guru.form', function ($view) {
            $view->with('mapel_list', Mapel::pluck('nama_mapel', 'id'));
        });
    }
}
