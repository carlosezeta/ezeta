<?php

namespace Modules\Shop\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Shop\Entities\Carro;
use Modules\Shop\Repositories\CarroRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class CarroController extends AdminBaseController
{
    /**
     * @var CarroRepository
     */
    private $carro;

    public function __construct(CarroRepository $carro)
    {
        parent::__construct();

        $this->carro = $carro;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$carros = $this->carro->all();

        return view('shop::admin.carros.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('shop::admin.carros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->carro->create($request->all());

        return redirect()->route('admin.shop.carro.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('shop::carros.title.carros')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Carro $carro
     * @return Response
     */
    public function edit(Carro $carro)
    {
        return view('shop::admin.carros.edit', compact('carro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Carro $carro
     * @param  Request $request
     * @return Response
     */
    public function update(Carro $carro, Request $request)
    {
        $this->carro->update($carro, $request->all());

        return redirect()->route('admin.shop.carro.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('shop::carros.title.carros')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Carro $carro
     * @return Response
     */
    public function destroy(Carro $carro)
    {
        $this->carro->destroy($carro);

        return redirect()->route('admin.shop.carro.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('shop::carros.title.carros')]));
    }
}
