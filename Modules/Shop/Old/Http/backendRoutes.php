<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/shop'], function (Router $router) {
        $router->bind('carts', function ($id) {
            return app('Modules\Shop\Repositories\CartRepository')->find($id);
        });
        $router->resource('carts', 'CartController', ['except' => ['show'], 'names' => [
            'index' => 'admin.shop.cart.index',
            'create' => 'admin.shop.cart.create',
            'store' => 'admin.shop.cart.store',
            'edit' => 'admin.shop.cart.edit',
            'update' => 'admin.shop.cart.update',
            'destroy' => 'admin.shop.cart.destroy',
        ]]);
        $router->bind('orders', function ($id) {
            return app('Modules\Shop\Repositories\OrderRepository')->find($id);
        });
        $router->resource('orders', 'OrderController', ['except' => ['show'], 'names' => [
            'index' => 'admin.shop.order.index',
            'create' => 'admin.shop.order.create',
            'store' => 'admin.shop.order.store',
            'edit' => 'admin.shop.order.edit',
            'update' => 'admin.shop.order.update',
            'destroy' => 'admin.shop.order.destroy',
        ]]);
        $router->bind('transactions', function ($id) {
            return app('Modules\Shop\Repositories\TransactionRepository')->find($id);
        });
        $router->resource('transactions', 'TransactionController', ['except' => ['show'], 'names' => [
            'index' => 'admin.shop.transaction.index',
            'create' => 'admin.shop.transaction.create',
            'store' => 'admin.shop.transaction.store',
            'edit' => 'admin.shop.transaction.edit',
            'update' => 'admin.shop.transaction.update',
            'destroy' => 'admin.shop.transaction.destroy',
        ]]);
        $router->bind('coupons', function ($id) {
            return app('Modules\Shop\Repositories\CouponRepository')->find($id);
        });
        $router->resource('coupons', 'CouponController', ['except' => ['show'], 'names' => [
            'index' => 'admin.shop.coupon.index',
            'create' => 'admin.shop.coupon.create',
            'store' => 'admin.shop.coupon.store',
            'edit' => 'admin.shop.coupon.edit',
            'update' => 'admin.shop.coupon.update',
            'destroy' => 'admin.shop.coupon.destroy',
        ]]);
// append




});
