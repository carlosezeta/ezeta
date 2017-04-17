<?php

namespace Modules\Shop\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Shop\Entities\Coupon;
use Modules\Shop\Repositories\CouponRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class CouponController extends AdminBaseController
{
    /**
     * @var CouponRepository
     */
    private $coupon;

    public function __construct(CouponRepository $coupon)
    {
        parent::__construct();

        $this->coupon = $coupon;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$coupons = $this->coupon->all();

        return view('shop::admin.coupons.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('shop::admin.coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->coupon->create($request->all());

        return redirect()->route('admin.shop.coupon.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('shop::coupons.title.coupons')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Coupon $coupon
     * @return Response
     */
    public function edit(Coupon $coupon)
    {
        return view('shop::admin.coupons.edit', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Coupon $coupon
     * @param  Request $request
     * @return Response
     */
    public function update(Coupon $coupon, Request $request)
    {
        $this->coupon->update($coupon, $request->all());

        return redirect()->route('admin.shop.coupon.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('shop::coupons.title.coupons')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Coupon $coupon
     * @return Response
     */
    public function destroy(Coupon $coupon)
    {
        $this->coupon->destroy($coupon);

        return redirect()->route('admin.shop.coupon.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('shop::coupons.title.coupons')]));
    }
}
