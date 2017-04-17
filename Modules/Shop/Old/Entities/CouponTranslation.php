<?php namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;

class CouponTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'shop__coupon_translations';
}
