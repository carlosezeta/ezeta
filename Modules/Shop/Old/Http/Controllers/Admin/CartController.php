<?php namespace Modules\Shop\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Shop\Entities\Cart;
use Modules\Shop\Repositories\CartRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class CartController extends AdminBaseController
{
    /**
     * @var CartRepository
     */
    private $cart;

    public function __construct(CartRepository $cart)
    {
        parent::__construct();

        $this->cart = $cart;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$carts = $this->cart->all();

        return view('shop::admin.carts.index', compact(''));
    }

    /**
     * Display a resource.
     *
     * @return Response
     */
    public function show($id)
    {
        $cart = $this->cart->find($id);

        return view('shop::carts.show', compact('cart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('shop::admin.carts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->cart->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('shop::carts.title.carts')]));

        return redirect()->route('admin.shop.cart.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Cart $cart
     * @return Response
     */
    public function edit(Cart $cart)
    {
        return view('shop::admin.carts.edit', compact('cart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Cart $cart
     * @param  Request $request
     * @return Response
     */
    public function update(Cart $cart, Request $request)
    {
        $this->cart->update($cart, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('shop::carts.title.carts')]));

        return redirect()->route('admin.shop.cart.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Cart $cart
     * @return Response
     */
    public function destroy(Cart $cart)
    {
        $this->cart->destroy($cart);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('shop::carts.title.carts')]));

        return redirect()->route('admin.shop.cart.index');
    }
}
