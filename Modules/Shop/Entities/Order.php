<?php

namespace Modules\Shop\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use Translatable;

    protected $table = 'shop__orders';
    public $translatedAttributes = [];
    protected $fillable = [];
}
