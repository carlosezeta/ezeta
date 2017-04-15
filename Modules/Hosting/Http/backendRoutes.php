<?php

use Illuminate\Routing\Router;

/** @var Router $router */
$router->bind('producto', function ($id) {
    return app(\Modules\Hosting\Repositories\ProductoRepository::class)->find($id);
});
$router->bind('cuenta', function ($id) {
    return app(\Modules\Hosting\Repositories\CuentaRepository::class)->find($id);
});

$router->group(['prefix' => '/hosting'], function (Router $router) {
    $router->get('productos', [
        'as' => 'admin.hosting.producto.index',
        'uses' => 'ProductoController@index',
        'middleware' => 'can:hosting.productos.index',
    ]);
    $router->get('productos/create', [
        'as' => 'admin.hosting.producto.create',
        'uses' => 'ProductoController@create',
        'middleware' => 'can:hosting.productos.create',
    ]);
    $router->post('productos', [
        'as' => 'admin.hosting.producto.store',
        'uses' => 'ProductoController@store',
        'middleware' => 'can:hosting.productos.create',
    ]);
    $router->get('productos/{producto}/edit', [
        'as' => 'admin.hosting.producto.edit',
        'uses' => 'ProductoController@edit',
        'middleware' => 'can:hosting.productos.edit',
    ]);
    $router->put('productos/{producto}', [
        'as' => 'admin.hosting.producto.update',
        'uses' => 'ProductoController@update',
        'middleware' => 'can:hosting.productos.edit',
    ]);
    $router->delete('productos/{producto}', [
        'as' => 'admin.hosting.producto.destroy',
        'uses' => 'ProductoController@destroy',
        'middleware' => 'can:hosting.productos.destroy',
    ]);

    $router->get('cuentas', [
        'as' => 'admin.hosting.cuenta.index',
        'uses' => 'CuentaController@index',
        'middleware' => 'can:hosting.cuentas.index',
    ]);
    $router->get('cuentas/create', [
        'as' => 'admin.hosting.cuenta.create',
        'uses' => 'CuentaController@create',
        'middleware' => 'can:hosting.cuentas.create',
    ]);
    $router->post('cuentas', [
        'as' => 'admin.hosting.cuenta.store',
        'uses' => 'CuentaController@store',
        'middleware' => 'can:hosting.cuentas.create',
    ]);
    $router->get('cuentas/{cuenta}/edit', [
        'as' => 'admin.hosting.cuenta.edit',
        'uses' => 'CuentaController@edit',
        'middleware' => 'can:hosting.cuentas.edit',
    ]);
    $router->put('cuentas/{cuenta}', [
        'as' => 'admin.hosting.cuenta.update',
        'uses' => 'CuentaController@update',
        'middleware' => 'can:hosting.cuentas.edit',
    ]);
    $router->delete('cuentas/{cuenta}', [
        'as' => 'admin.hosting.cuenta.destroy',
        'uses' => 'CuentaController@destroy',
        'middleware' => 'can:hosting.cuentas.destroy',
    ]);

// append
    $router->get('list-accounts', function()
    {
        $cuentas = \Gufy\CpanelWhm\Facades\CpanelWhm::listaccts();
        return $cuentas;
    });

    $router->get('funciones', function()
    {
        $funciones = \Gufy\CpanelWhm\Facades\CpanelWhm::applist();
        return $funciones;
    });

/* app =>[
    "accountsummary",
    "adddns",
    "addpkg",
    "applist",
    "changepackage",
    "cpanel",
    "createacct",
    "dumpzone",
    "editpkg",
    "fetch_doc_key",
    "fetchsslinfo",
    "generatessl",
    "getfeaturelist",
    "gethostname",
    "getlanglist",
    "installssl",
    "killpkg",
    "listaccts",
    "listcrts",
    "listpkgs",
    "listsuspended",
    "listzones",
    "loadavg",
    "lookupnsip",
    "myprivs",
    "nvget",
    "nvset",
    "passwd",
    "showbw",
    "version",
]*/

});