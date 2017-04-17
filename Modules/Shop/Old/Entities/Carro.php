<?php namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carro extends Model
{

    use SoftDeletes;
    protected $table = 'cart';
    protected $fillable = [
        'user_id',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

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

    public function add($data = [])
    {
        $item = Item::where('cart_id','=',$this->id)->where('sku','=',$data['id'])->first();
        if (empty($item)) {
            $item = new Item();
            $item->cart_id = $this->id;
            $item->user_id = $data['user_id'];
            $item->sku = $data['id'];
            $item->name = $data['name'];
            $item->quantity = $data['qty'];
            $item->price = $data['price'];
            $item->tax = $data['tax'];
            if (!empty($data['domain'])){
                $item->domain = $data['domain'];
            }
        } else {
            $item->quantity += $data['qty'];
            if (!empty($data['domain'])){
                $item->domain .= ','.$data['domain'];
            }
        }
        $item->save();

        return true;
    }
}
