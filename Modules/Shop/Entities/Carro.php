<?php

namespace Modules\Shop\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use Translatable;

    protected $table = 'shop__carros';
    public $translatedAttributes = [];
    protected $fillable = [];
}
