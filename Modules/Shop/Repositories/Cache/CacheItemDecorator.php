<?php

namespace Modules\Shop\Repositories\Cache;

use Modules\Shop\Repositories\ItemRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheItemDecorator extends BaseCacheDecorator implements ItemRepository
{
    public function __construct(ItemRepository $item)
    {
        parent::__construct();
        $this->entityName = 'shop.items';
        $this->repository = $item;
    }
}
