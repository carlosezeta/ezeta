<?php

namespace Modules\Hosting\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    use Translatable;

    protected $table = 'hosting__cuentas';
    public $translatedAttributes = [];
    protected $fillable = [
    	'domain',
        'user_id',
    	'disklimit',
    	'bwlimit',
		'paquete',
		'server',
		'order_id',
		'paymentmethod',
		'firstpaymentamount',
		'amount',
		'billingcycle',
		'regdate',
		'domainstatus',
		'username',
		'password',
		'notes',
		'promoid',
		'suspendreason',
		'overideautosuspend',
		'overidesuspenduntil',
		'ip',
		'ns1',
		'ns2',
	];
}
