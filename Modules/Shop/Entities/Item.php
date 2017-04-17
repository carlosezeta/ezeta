<?php

namespace Modules\Shop\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use Translatable;

    protected $table = 'shop__items';
    public $translatedAttributes = [];
    protected $fillable = [];
}
