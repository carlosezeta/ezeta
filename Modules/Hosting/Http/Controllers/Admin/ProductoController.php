<?php namespace Modules\Hosting\Http\Controllers\Admin;

use Illuminate\Support\Facades\Log;
use Modules\Hosting\Entities\Producto;
use Modules\Hosting\Http\Requests\CreateProductoRequest;
use Modules\Hosting\Http\Requests\UpdateProductoRequest;
use Modules\Hosting\Repositories\ProductoRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class ProductoController extends AdminBaseController
{
    /**
     * @var ProductoRepository
     */
    private $producto;

    public function __construct(ProductoRepository $producto)
    {
        parent::__construct();

        $this->producto = $producto;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $productos = $this->producto->all();

        return view('hosting::admin.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('hosting::admin.productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateProductoRequest $request
     * @return Response
     */
    public function store(CreateProductoRequest $request)
    {
        $this->producto->create($request->all());

        return redirect()->route('admin.hosting.producto.index')
            ->withSuccess(trans('hosting::productos.producto.created'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Producto $producto
     * @return Response
     */
    public function edit(Producto $producto)
    {
        return view('hosting::admin.productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Producto $producto
     * @param  UpdateProductoRequest $request
     * @return Response
     */
    public function update(Producto $producto, UpdateProductoRequest $request)
    {
        $this->producto->update($producto, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('hosting::productos.title.productos')]));

        return redirect()->route('admin.hosting.producto.index')
            ->withSuccess(trans('hosting::productos.producto.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Producto $producto
     * @return Response
     */
    public function destroy(Producto $producto)
    {
        $this->producto->destroy($producto);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('hosting::productos.title.productos')]));

        return redirect()->route('admin.hosting.producto.index');
    }
}
