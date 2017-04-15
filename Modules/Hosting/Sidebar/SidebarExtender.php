<?php

namespace Modules\Hosting\Sidebar;

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
            $group->item(trans('hosting::hosting.title'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(10);
                $item->authorize(
                     /* append */
                );
                $item->item(trans('hosting::productos.title.productos'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.hosting.producto.create');
                    $item->route('admin.hosting.producto.index');
                    $item->authorize(
                        $this->auth->hasAccess('hosting.productos.index')
                    );
                });
                $item->item(trans('hosting::cuentas.title.cuentas'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.hosting.cuenta.create');
                    $item->route('admin.hosting.cuenta.index');
                    $item->authorize(
                        $this->auth->hasAccess('hosting.cuentas.index')
                    );
                });
// append


            });
        });

        return $menu;
    }
}
