<?php

namespace App\Providers;

use App\Eskul;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Siswa;
use App\Guru;
use App\Kelas;
use App\Mapel;
use App\User;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();

        Route::bind('idSiswa', function($siswa){
            return Siswa::where('id', $siswa)->firstOrfail();
        });
        Route::bind('idGuru', function($guru){
            return Guru::where('id', $guru)->firstOrfail();
        });
        Route::bind('idKelas', function($kelas){
            return Kelas::where('id', $kelas)->firstOrfail();
        });
        Route::bind('idMapel', function($mapel){
            return Mapel::where('id', $mapel)->firstOrfail();
        });
        Route::bind('idUser', function($user){
            return User::where('id', $user)->firstOrfail();
        });
        Route::bind('idEskul', function($eskul){
            return Eskul::where('id', $eskul)->firstOrfail();
        });
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }
}
