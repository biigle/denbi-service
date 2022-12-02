<?php

namespace Biigle\Modules\DenbiService;

use Biigle\Services\Modules;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class DenbiServiceServiceProvider extends ServiceProvider
{

   /**
   * Bootstrap the application events.
   *
   * @param Modules $modules
   * @param  Router  $router
   * @return  void
   */
    public function boot(Modules $modules, Router $router)
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'denbi-service');

        // $router->group([
        //     'namespace' => 'Biigle\Modules\Module\Http\Controllers',
        //     'middleware' => 'web',
        // ], function ($router) {
        //     require __DIR__.'/Http/routes.php';
        // });

        $modules->register('denbi-service', [
            'viewMixins' => [
                'navbarHelpItem',
            ],
            'controllerMixins' => [
                //
            ],
            'apidoc' => [
               //__DIR__.'/Http/Controllers/Api/',
            ],
        ]);

        // $this->publishes([
        //     __DIR__.'/public/assets' => public_path('vendor/denbi-service'),
        // ], 'public');
    }

    /**
    * Register the service provider.
    *
    * @return  void
    */
    public function register()
    {
        //
    }
}
