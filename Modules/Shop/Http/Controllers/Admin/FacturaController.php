<?php

namespace Modules\Shop\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Shop\Entities\Factura;
use Modules\Shop\Repositories\FacturaRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class FacturaController extends AdminBaseController
{
    /**
     * @var FacturaRepository
     */
    private $factura;

    public function __construct(FacturaRepository $factura)
    {
        parent::__construct();

        $this->factura = $factura;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$facturas = $this->factura->all();

        return view('shop::admin.facturas.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('shop::admin.facturas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->factura->create($request->all());

        return redirect()->route('admin.shop.factura.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('shop::facturas.title.facturas')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Factura $factura
     * @return Response
     */
    public function edit(Factura $factura)
    {
        return view('shop::admin.facturas.edit', compact('factura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Factura $factura
     * @param  Request $request
     * @return Response
     */
    public function update(Factura $factura, Request $request)
    {
        $this->factura->update($factura, $request->all());

        return redirect()->route('admin.shop.factura.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('shop::facturas.title.facturas')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Factura $factura
     * @return Response
     */
    public function destroy(Factura $factura)
    {
        $this->factura->destroy($factura);

        return redirect()->route('admin.shop.factura.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('shop::facturas.title.facturas')]));
    }
}
