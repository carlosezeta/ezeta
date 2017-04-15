<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostingCuentaTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosting__cuenta_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('cuenta_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['cuenta_id', 'locale']);
            $table->foreign('cuenta_id')->references('id')->on('hosting__cuentas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hosting__cuenta_translations', function (Blueprint $table) {
            $table->dropForeign(['cuenta_id']);
        });
        Schema::dropIfExists('hosting__cuenta_translations');
    }
}
