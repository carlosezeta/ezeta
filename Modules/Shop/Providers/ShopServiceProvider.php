<?php

namespace Modules\Shop\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;

class ShopServiceProvider extends ServiceProvider
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
        $this->publishConfig('shop', 'permissions');
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
            'Modules\Shop\Repositories\CarroRepository',
            function () {
                $repository = new \Modules\Shop\Repositories\Eloquent\EloquentCarroRepository(new \Modules\Shop\Entities\Carro());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Shop\Repositories\Cache\CacheCarroDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Shop\Repositories\CouponRepository',
            function () {
                $repository = new \Modules\Shop\Repositories\Eloquent\EloquentCouponRepository(new \Modules\Shop\Entities\Coupon());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Shop\Repositories\Cache\CacheCouponDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Shop\Repositories\FacturaRepository',
            function () {
                $repository = new \Modules\Shop\Repositories\Eloquent\EloquentFacturaRepository(new \Modules\Shop\Entities\Factura());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Shop\Repositories\Cache\CacheFacturaDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Shop\Repositories\ItemRepository',
            function () {
                $repository = new \Modules\Shop\Repositories\Eloquent\EloquentItemRepository(new \Modules\Shop\Entities\Item());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Shop\Repositories\Cache\CacheItemDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Shop\Repositories\OrderRepository',
            function () {
                $repository = new \Modules\Shop\Repositories\Eloquent\EloquentOrderRepository(new \Modules\Shop\Entities\Order());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Shop\Repositories\Cache\CacheOrderDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Shop\Repositories\TransactionRepository',
            function () {
                $repository = new \Modules\Shop\Repositories\Eloquent\EloquentTransactionRepository(new \Modules\Shop\Entities\Transaction());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Shop\Repositories\Cache\CacheTransactionDecorator($repository);
            }
        );
// add bindings






    }
}
