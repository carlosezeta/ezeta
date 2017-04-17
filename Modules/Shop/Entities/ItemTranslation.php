<?php

namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;

class ItemTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'shop__item_translations';
}