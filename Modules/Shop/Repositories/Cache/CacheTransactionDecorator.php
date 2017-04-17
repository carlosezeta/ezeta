<?php

namespace Modules\Shop\Repositories\Cache;

use Modules\Shop\Repositories\TransactionRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheTransactionDecorator extends BaseCacheDecorator implements TransactionRepository
{
    public function __construct(TransactionRepository $transaction)
    {
        parent::__construct();
        $this->entityName = 'shop.transactions';
        $this->repository = $transaction;
    }
}
