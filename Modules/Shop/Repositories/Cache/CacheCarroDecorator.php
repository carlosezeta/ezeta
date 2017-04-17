<?php

namespace Modules\Shop\Repositories\Cache;

use Modules\Shop\Repositories\CarroRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheCarroDecorator extends BaseCacheDecorator implements CarroRepository
{
    public function __construct(CarroRepository $carro)
    {
        parent::__construct();
        $this->entityName = 'shop.carros';
        $this->repository = $carro;
    }
}
