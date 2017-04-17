<?php namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items(){
        return $this->hasMany("Modules\\Shop\\Entities\\Item", 'cart_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        $driver = config('asgard.user.users.driver');

        return $this->belongsTo("Modules\\User\\Entities\\{$driver}\\User");
    }
}
