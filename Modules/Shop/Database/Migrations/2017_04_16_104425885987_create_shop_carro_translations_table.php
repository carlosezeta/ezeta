<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopCarroTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('shop__carro_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('carro_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['carro_id', 'locale']);
            $table->foreign('carro_id')->references('id')->on('shop__carros')->onDelete('cascade');
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
        Schema::table('shop__carro_translations', function (Blueprint $table) {
            $table->dropForeign(['carro_id']);
        });
        Schema::dropIfExists('shop__carro_translations');
        */
    }
}
