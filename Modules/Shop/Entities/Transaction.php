<?php

namespace Modules\Shop\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use Translatable;

    protected $table = 'shop__transactions';
    public $translatedAttributes = [];
    protected $fillable = [];
}
