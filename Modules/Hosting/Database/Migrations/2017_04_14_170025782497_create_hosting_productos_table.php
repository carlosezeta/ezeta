<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostingProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosting__productos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your fields
			$table->string('sku');
            $table->decimal('price', 20, 2);
			$table->string('name');
            $table->integer('disklimit');
            $table->integer('bwlimit');
            $table->integer('emailaccounts');
            $table->integer('ftpaccounts');
            $table->string('paquete');
            $table->string('type');
            $table->tinyInteger('gid');
            $table->text('description');
            $table->tinyInteger('hidden');
            $table->tinyInteger('showdomainoptions');
            $table->integer('welcomeemail');
            $table->tinyInteger('stockcontrol');
            $table->integer('qty');
            $table->tinyInteger('proratabilling');
            $table->integer('proratadate');
            $table->integer('proratachargenextmonth');
            $table->string('paytype');
            $table->tinyInteger('allowqty');
            $table->string('subdomain');
            $table->string('autosetup');
            $table->string('servertype');
            $table->integer('servergroup');
            $table->integer('mysqldatabases');
            $table->integer('subdomains');
            $table->integer('parkeddomains');
            $table->integer('addondomains');
            $table->string('dedicatedip');
            $table->tinyInteger('cgiaccess');
            $table->tinyInteger('shellaccess');
            $table->tinyInteger('frontpageextensions');
            $table->integer('mailinglists');
            $table->integer('server_id')->unsigned();
            $table->timestamps();
			$table->index('sku');
            $table->index('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hosting__productos');
    }
}
