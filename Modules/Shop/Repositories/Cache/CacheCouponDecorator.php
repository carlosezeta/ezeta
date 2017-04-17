<?php

namespace Modules\Shop\Repositories\Cache;

use Modules\Shop\Repositories\CouponRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheCouponDecorator extends BaseCacheDecorator implements CouponRepository
{
    public function __construct(CouponRepository $coupon)
    {
        parent::__construct();
        $this->entityName = 'shop.coupons';
        $this->repository = $coupon;
    }
}
