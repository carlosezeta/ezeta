<?php

namespace Modules\Shop\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Shop\Entities\Item;
use Modules\Shop\Repositories\ItemRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class ItemController extends AdminBaseController
{
    /**
     * @var ItemRepository
     */
    private $item;

    public function __construct(ItemRepository $item)
    {
        parent::__construct();

        $this->item = $item;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$items = $this->item->all();

        return view('shop::admin.items.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('shop::admin.items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->item->create($request->all());

        return redirect()->route('admin.shop.item.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('shop::items.title.items')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Item $item
     * @return Response
     */
    public function edit(Item $item)
    {
        return view('shop::admin.items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Item $item
     * @param  Request $request
     * @return Response
     */
    public function update(Item $item, Request $request)
    {
        $this->item->update($item, $request->all());

        return redirect()->route('admin.shop.item.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('shop::items.title.items')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Item $item
     * @return Response
     */
    public function destroy(Item $item)
    {
        $this->item->destroy($item);

        return redirect()->route('admin.shop.item.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('shop::items.title.items')]));
    }
}
