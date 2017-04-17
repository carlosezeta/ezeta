<?php

namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;

class OrderTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'shop__order_translations';
}
