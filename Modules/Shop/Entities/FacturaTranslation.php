<?php

namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;

class FacturaTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'shop__factura_translations';
}
