<?php

namespace Modules\Hosting\Repositories\Cache;

use Modules\Hosting\Repositories\CuentaRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheCuentaDecorator extends BaseCacheDecorator implements CuentaRepository
{
    public function __construct(CuentaRepository $cuenta)
    {
        parent::__construct();
        $this->entityName = 'hosting.cuentas';
        $this->repository = $cuenta;
    }
}
