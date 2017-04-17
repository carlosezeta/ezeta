<?php namespace Modules\Shop\Repositories\Cache;

use Modules\Shop\Repositories\OrderRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheOrderDecorator extends BaseCacheDecorator implements OrderRepository
{
    public function __construct(OrderRepository $order)
    {
        parent::__construct();
        $this->entityName = 'shop.orders';
        $this->repository = $order;
    }
}
