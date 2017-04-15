<?php

namespace Modules\Hosting\Entities;

use Illuminate\Database\Eloquent\Model;

class CuentaTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'hosting__cuenta_translations';
}
