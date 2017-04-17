<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopFacturaTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('shop__factura_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('factura_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['factura_id', 'locale']);
            $table->foreign('factura_id')->references('id')->on('shop__facturas')->onDelete('cascade');
        });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*
        Schema::table('shop__factura_translations', function (Blueprint $table) {
            $table->dropForeign(['factura_id']);
        });
        Schema::dropIfExists('shop__factura_translations');
        */
    }
}
