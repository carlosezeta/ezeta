<?php namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;

class CartTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'shop__cart_translations';
}
