<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Guru;

class FormMapelServiceProvider extends ServiceProvider
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
        view()->composer('mapel.form', function ($view) {
            $view->with('guru_list', Guru::pluck('nama_guru', 'id'));
        });
    }
}
