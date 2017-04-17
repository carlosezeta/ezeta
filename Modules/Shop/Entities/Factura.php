<?php

namespace Modules\Shop\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use Translatable;

    protected $table = 'shop__facturas';
    public $translatedAttributes = [];
    protected $fillable = [];
}
