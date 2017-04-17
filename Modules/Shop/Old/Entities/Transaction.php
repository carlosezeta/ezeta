<?php namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{

    protected $table = 'transactions';
    protected $fillable = [
        'order_id',
        'gateway',
        'token',
        'transaction_id'
    ];
}
