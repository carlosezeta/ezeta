<?php

namespace Modules\Hosting\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use Translatable;

    protected $table = 'hosting__productos';
    public $translatedAttributes = ['name'];
    protected $fillable = [
		'name',
		'price',
    	'disklimit',
    	'bwlimit',
    	'emailaccounts',
    	'ftpaccounts',
    	'paquete',
        'description',
        'hidden',
        'showdomainoptions',
        'wcomeemail',
        'stockcontrol',
        'qty',
        'proratabilling',
        'proratadate',
        'proratachargenextmonth',
        'paytype',
        'allowqty',
        'subdomain',
        'autosetup',
        'servertype',
        'servergroup',
        'mysqldatabases',
        'subdomains',
        'parkeddomains',
        'addondomains',
        'dedicatedip',
        'cgiaccess',
        'shellaccess',
        'frontpageextensions',
        'mailinglists',
        'server_id'
	];
}
