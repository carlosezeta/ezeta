<?php

namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;

class CarroTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'shop__carro_translations';
}
