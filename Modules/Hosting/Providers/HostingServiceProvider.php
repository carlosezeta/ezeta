<?php

namespace Modules\Hosting\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;

class HostingServiceProvider extends ServiceProvider
{
    use CanPublishConfiguration;
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
    }

    public function boot()
    {
        $this->publishConfig('hosting', 'permissions');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\Hosting\Repositories\ProductoRepository',
            function () {
                $repository = new \Modules\Hosting\Repositories\Eloquent\EloquentProductoRepository(new \Modules\Hosting\Entities\Producto());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Hosting\Repositories\Cache\CacheProductoDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Hosting\Repositories\CuentaRepository',
            function () {
                $repository = new \Modules\Hosting\Repositories\Eloquent\EloquentCuentaRepository(new \Modules\Hosting\Entities\Cuenta());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Hosting\Repositories\Cache\CacheCuentaDecorator($repository);
            }
        );
// add bindings


    }
}
