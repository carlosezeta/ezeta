<?php namespace Modules\Shop\Sidebar;

use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Modules\Core\Contracts\Authentication;

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
            $group->item(trans('shop::shop.title'), function (Item $item) {
                $item->icon('fa fa-shopping-cart');
                $item->weight(10);
                $item->authorize(
                     /* append */
                );
                $item->item(trans('shop::carts.title.carts'), function (Item $item) {
                    $item->icon('fa fa-cart-plus');
                    $item->weight(0);
                    $item->append('admin.shop.cart.create');
                    $item->route('admin.shop.cart.index');
                    $item->authorize(
                        $this->auth->hasAccess('shop.carts.index')
                    );
                });
                $item->item(trans('shop::orders.title.orders'), function (Item $item) {
                    $item->icon('fa fa-file-text');
                    $item->weight(0);
                    $item->append('admin.shop.order.create');
                    $item->route('admin.shop.order.index');
                    $item->authorize(
                        $this->auth->hasAccess('shop.orders.index')
                    );
                });
                $item->item(trans('shop::transactions.title.transactions'), function (Item $item) {
                    $item->icon('fa fa-exchange');
                    $item->weight(0);
                    $item->append('admin.shop.transaction.create');
                    $item->route('admin.shop.transaction.index');
                    $item->authorize(
                        $this->auth->hasAccess('shop.transactions.index')
                    );
                });
                $item->item(trans('shop::coupons.title.coupons'), function (Item $item) {
                    $item->icon('fa fa-hand-o-right');
                    $item->weight(0);
                    $item->append('admin.shop.coupon.create');
                    $item->route('admin.shop.coupon.index');
                    $item->authorize(
                        $this->auth->hasAccess('shop.coupons.index')
                    );
                });
// append




            });
        });

        return $menu;
    }
}
