<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopTransactionTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('shop__transaction_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('transaction_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['transaction_id', 'locale']);
            $table->foreign('transaction_id')->references('id')->on('shop__transactions')->onDelete('cascade');
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
        Schema::table('shop__transaction_translations', function (Blueprint $table) {
            $table->dropForeign(['transaction_id']);
        });
        Schema::dropIfExists('shop__transaction_translations');
        */
    }
}
