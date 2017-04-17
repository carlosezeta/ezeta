<?php namespace Modules\Shop\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use Translatable;

    protected $table = 'coupons';
    public $translatedAttributes = [];
    protected $fillable = [];
}
