<?php

namespace Modules\Shop\Repositories\Cache;

use Modules\Shop\Repositories\FacturaRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheFacturaDecorator extends BaseCacheDecorator implements FacturaRepository
{
    public function __construct(FacturaRepository $factura)
    {
        parent::__construct();
        $this->entityName = 'shop.facturas';
        $this->repository = $factura;
    }
}
