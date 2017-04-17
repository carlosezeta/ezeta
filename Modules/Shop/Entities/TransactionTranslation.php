<?php

namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;

class TransactionTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'shop__transaction_translations';
}
