<?php

namespace Modules\Shop\Sidebar;

use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Modules\User\Contracts\Authentication;

class SidebarExtender implements \Maatwebsite\Sidebar\SidebarExtender
{
    /**
     * @var Authentication
     */
    protected $auth;

    /**
     * @param Authentication $auth
     *
     * @internal param Guard $guard
     */
    public function __construct(Authentication $auth)
    {
        $this->auth = $auth;
    }

    /**
     * @param Menu $menu
     *
     * @return Menu
     */
    public function extendWith(Menu $menu)
    {
        $menu->group(trans('core::sidebar.content'), function (Group $group) {
            $group->item(trans('shop::carros.title.carros'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(10);
                $item->authorize(
                     /* append */
                );
                $item->item(trans('shop::carros.title.carros'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.shop.carro.create');
                    $item->route('admin.shop.carro.index');
                    $item->authorize(
                        $this->auth->hasAccess('shop.carros.index')
                    );
                });
                $item->item(trans('shop::coupons.title.coupons'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.shop.coupon.create');
                    $item->route('admin.shop.coupon.index');
                    $item->authorize(
                        $this->auth->hasAccess('shop.coupons.index')
                    );
                });
                $item->item(trans('shop::facturas.title.facturas'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.shop.factura.create');
                    $item->route('admin.shop.factura.index');
                    $item->authorize(
                        $this->auth->hasAccess('shop.facturas.index')
                    );
                });
                $item->item(trans('shop::items.title.items'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.shop.item.create');
                    $item->route('admin.shop.item.index');
                    $item->authorize(
                        $this->auth->hasAccess('shop.items.index')
                    );
                });
                $item->item(trans('shop::orders.title.orders'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.shop.order.create');
                    $item->route('admin.shop.order.index');
                    $item->authorize(
                        $this->auth->hasAccess('shop.orders.index')
                    );
                });
                $item->item(trans('shop::transactions.title.transactions'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.shop.transaction.create');
                    $item->route('admin.shop.transaction.index');
                    $item->authorize(
                        $this->auth->hasAccess('shop.transactions.index')
                    );
                });
// append






            });
        });

        return $menu;
    }
}
