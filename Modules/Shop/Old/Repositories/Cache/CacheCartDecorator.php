<?php namespace Modules\Shop\Repositories\Cache;

use Modules\Shop\Repositories\CartRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheCartDecorator extends BaseCacheDecorator implements CartRepository
{
    public function __construct(CartRepository $cart)
    {
        parent::__construct();
        $this->entityName = 'shop.carts';
        $this->repository = $cart;
    }
}
