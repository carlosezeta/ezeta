<?php

namespace Modules\Hosting\Repositories\Cache;

use Modules\Hosting\Repositories\ProductoRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheProductoDecorator extends BaseCacheDecorator implements ProductoRepository
{
    public function __construct(ProductoRepository $producto)
    {
        parent::__construct();
        $this->entityName = 'hosting.productos';
        $this->repository = $producto;
    }
}
