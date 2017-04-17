<?php namespace Modules\Shop\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Item extends Model {
    protected $table = 'items';
    protected $fillable = [
        'sku',
        'user_id',
        'cart_id',
        'order_id',
        'price',
        'tax',
        'quantity',
        'domain',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function carro()
    {
        return $this->belongsTo("Modules\\Shop\\Entities\\Carro");
    }

}