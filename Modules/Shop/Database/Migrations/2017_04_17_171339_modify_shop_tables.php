<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyShopTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shop__facturas', function (Blueprint $table) {
            $table->foreign('order_id')
                ->references('id')->on('shop__orders')
                ->onDelete('cascade');
        });

        Schema::table('shop__items', function (Blueprint $table) {
            $table->foreign('order_id')
                ->references('id')->on('shop__orders')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shop__facturas', function(Blueprint $table) {
            $table->dropForeign(['order_id']);
        });

        Schema::table('shop__items', function(Blueprint $table) {
            $table->dropForeign(['order_id']);
        });
    }
}
