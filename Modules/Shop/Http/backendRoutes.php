<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/shop'], function (Router $router) {
    $router->bind('carro', function ($id) {
        return app('Modules\Shop\Repositories\CarroRepository')->find($id);
    });
    $router->get('carros', [
        'as' => 'admin.shop.carro.index',
        'uses' => 'CarroController@index',
        'middleware' => 'can:shop.carros.index'
    ]);
    $router->get('carros/create', [
        'as' => 'admin.shop.carro.create',
        'uses' => 'CarroController@create',
        'middleware' => 'can:shop.carros.create'
    ]);
    $router->post('carros', [
        'as' => 'admin.shop.carro.store',
        'uses' => 'CarroController@store',
        'middleware' => 'can:shop.carros.create'
    ]);
    $router->get('carros/{carro}/edit', [
        'as' => 'admin.shop.carro.edit',
        'uses' => 'CarroController@edit',
        'middleware' => 'can:shop.carros.edit'
    ]);
    $router->put('carros/{carro}', [
        'as' => 'admin.shop.carro.update',
        'uses' => 'CarroController@update',
        'middleware' => 'can:shop.carros.edit'
    ]);
    $router->delete('carros/{carro}', [
        'as' => 'admin.shop.carro.destroy',
        'uses' => 'CarroController@destroy',
        'middleware' => 'can:shop.carros.destroy'
    ]);
    $router->bind('coupon', function ($id) {
        return app('Modules\Shop\Repositories\CouponRepository')->find($id);
    });
    $router->get('coupons', [
        'as' => 'admin.shop.coupon.index',
        'uses' => 'CouponController@index',
        'middleware' => 'can:shop.coupons.index'
    ]);
    $router->get('coupons/create', [
        'as' => 'admin.shop.coupon.create',
        'uses' => 'CouponController@create',
        'middleware' => 'can:shop.coupons.create'
    ]);
    $router->post('coupons', [
        'as' => 'admin.shop.coupon.store',
        'uses' => 'CouponController@store',
        'middleware' => 'can:shop.coupons.create'
    ]);
    $router->get('coupons/{coupon}/edit', [
        'as' => 'admin.shop.coupon.edit',
        'uses' => 'CouponController@edit',
        'middleware' => 'can:shop.coupons.edit'
    ]);
    $router->put('coupons/{coupon}', [
        'as' => 'admin.shop.coupon.update',
        'uses' => 'CouponController@update',
        'middleware' => 'can:shop.coupons.edit'
    ]);
    $router->delete('coupons/{coupon}', [
        'as' => 'admin.shop.coupon.destroy',
        'uses' => 'CouponController@destroy',
        'middleware' => 'can:shop.coupons.destroy'
    ]);
    $router->bind('factura', function ($id) {
        return app('Modules\Shop\Repositories\FacturaRepository')->find($id);
    });
    $router->get('facturas', [
        'as' => 'admin.shop.factura.index',
        'uses' => 'FacturaController@index',
        'middleware' => 'can:shop.facturas.index'
    ]);
    $router->get('facturas/create', [
        'as' => 'admin.shop.factura.create',
        'uses' => 'FacturaController@create',
        'middleware' => 'can:shop.facturas.create'
    ]);
    $router->post('facturas', [
        'as' => 'admin.shop.factura.store',
        'uses' => 'FacturaController@store',
        'middleware' => 'can:shop.facturas.create'
    ]);
    $router->get('facturas/{factura}/edit', [
        'as' => 'admin.shop.factura.edit',
        'uses' => 'FacturaController@edit',
        'middleware' => 'can:shop.facturas.edit'
    ]);
    $router->put('facturas/{factura}', [
        'as' => 'admin.shop.factura.update',
        'uses' => 'FacturaController@update',
        'middleware' => 'can:shop.facturas.edit'
    ]);
    $router->delete('facturas/{factura}', [
        'as' => 'admin.shop.factura.destroy',
        'uses' => 'FacturaController@destroy',
        'middleware' => 'can:shop.facturas.destroy'
    ]);
    $router->bind('item', function ($id) {
        return app('Modules\Shop\Repositories\ItemRepository')->find($id);
    });
    $router->get('items', [
        'as' => 'admin.shop.item.index',
        'uses' => 'ItemController@index',
        'middleware' => 'can:shop.items.index'
    ]);
    $router->get('items/create', [
        'as' => 'admin.shop.item.create',
        'uses' => 'ItemController@create',
        'middleware' => 'can:shop.items.create'
    ]);
    $router->post('items', [
        'as' => 'admin.shop.item.store',
        'uses' => 'ItemController@store',
        'middleware' => 'can:shop.items.create'
    ]);
    $router->get('items/{item}/edit', [
        'as' => 'admin.shop.item.edit',
        'uses' => 'ItemController@edit',
        'middleware' => 'can:shop.items.edit'
    ]);
    $router->put('items/{item}', [
        'as' => 'admin.shop.item.update',
        'uses' => 'ItemController@update',
        'middleware' => 'can:shop.items.edit'
    ]);
    $router->delete('items/{item}', [
        'as' => 'admin.shop.item.destroy',
        'uses' => 'ItemController@destroy',
        'middleware' => 'can:shop.items.destroy'
    ]);
    $router->bind('order', function ($id) {
        return app('Modules\Shop\Repositories\OrderRepository')->find($id);
    });
    $router->get('orders', [
        'as' => 'admin.shop.order.index',
        'uses' => 'OrderController@index',
        'middleware' => 'can:shop.orders.index'
    ]);
    $router->get('orders/create', [
        'as' => 'admin.shop.order.create',
        'uses' => 'OrderController@create',
        'middleware' => 'can:shop.orders.create'
    ]);
    $router->post('orders', [
        'as' => 'admin.shop.order.store',
        'uses' => 'OrderController@store',
        'middleware' => 'can:shop.orders.create'
    ]);
    $router->get('orders/{order}/edit', [
        'as' => 'admin.shop.order.edit',
        'uses' => 'OrderController@edit',
        'middleware' => 'can:shop.orders.edit'
    ]);
    $router->put('orders/{order}', [
        'as' => 'admin.shop.order.update',
        'uses' => 'OrderController@update',
        'middleware' => 'can:shop.orders.edit'
    ]);
    $router->delete('orders/{order}', [
        'as' => 'admin.shop.order.destroy',
        'uses' => 'OrderController@destroy',
        'middleware' => 'can:shop.orders.destroy'
    ]);
    $router->bind('transaction', function ($id) {
        return app('Modules\Shop\Repositories\TransactionRepository')->find($id);
    });
    $router->get('transactions', [
        'as' => 'admin.shop.transaction.index',
        'uses' => 'TransactionController@index',
        'middleware' => 'can:shop.transactions.index'
    ]);
    $router->get('transactions/create', [
        'as' => 'admin.shop.transaction.create',
        'uses' => 'TransactionController@create',
        'middleware' => 'can:shop.transactions.create'
    ]);
    $router->post('transactions', [
        'as' => 'admin.shop.transaction.store',
        'uses' => 'TransactionController@store',
        'middleware' => 'can:shop.transactions.create'
    ]);
    $router->get('transactions/{transaction}/edit', [
        'as' => 'admin.shop.transaction.edit',
        'uses' => 'TransactionController@edit',
        'middleware' => 'can:shop.transactions.edit'
    ]);
    $router->put('transactions/{transaction}', [
        'as' => 'admin.shop.transaction.update',
        'uses' => 'TransactionController@update',
        'middleware' => 'can:shop.transactions.edit'
    ]);
    $router->delete('transactions/{transaction}', [
        'as' => 'admin.shop.transaction.destroy',
        'uses' => 'TransactionController@destroy',
        'middleware' => 'can:shop.transactions.destroy'
    ]);
// append






});
