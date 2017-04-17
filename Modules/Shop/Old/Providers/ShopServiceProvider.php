<?php namespace Modules\Shop\Providers;

use Illuminate\Support\ServiceProvider;

class ShopServiceProvider extends ServiceProvider
{
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
            'Modules\Shop\Repositories\CartRepository',
            function () {
                $repository = new \Modules\Shop\Repositories\Eloquent\EloquentCartRepository(new \Modules\Shop\Entities\Carro());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Shop\Repositories\Cache\CacheCartDecorator($repository);
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
// add bindings




    }
}
