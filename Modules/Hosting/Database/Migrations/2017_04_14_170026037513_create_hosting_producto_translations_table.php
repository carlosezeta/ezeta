<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostingProductoTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosting__producto_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields
			$table->string('name');
			
            $table->integer('producto_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['producto_id', 'locale']);
            $table->foreign('producto_id')->references('id')->on('hosting__productos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hosting__producto_translations', function (Blueprint $table) {
            $table->dropForeign(['producto_id']);
        });
        Schema::dropIfExists('hosting__producto_translations');
    }
}
