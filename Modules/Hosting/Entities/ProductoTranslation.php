<?php

namespace Modules\Hosting\Entities;

use Illuminate\Database\Eloquent\Model;

class ProductoTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name'];
    protected $table = 'hosting__producto_translations';
}
