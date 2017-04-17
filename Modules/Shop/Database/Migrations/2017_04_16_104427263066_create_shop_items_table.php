<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop__items', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your fields
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->integer('carro_id')->unsigned()->nullable();
            $table->foreign('carro_id')
                ->references('id')->on('carros')
                ->onDelete('cascade');
            $table->integer('order_id')->unsigned()->nullable();
            $table->foreign('order_id')
                ->references('id')->on('orders')
                ->onDelete('cascade');
            $table->integer('factura_id')->unsigned()->nullable();
            $table->foreign('factura_id')
                ->references('id')->on('facturas')
                ->onDelete('cascade');
            $table->string('sku');
            $table->decimal('price',20,2);
            $table->decimal('tax', 20,2)->default(0);
            $table->decimal('shipping',20,2)->default(0);
            $table->decimal('disccount',20,2)->default(0);
            $table->integer('quantity')->unsigned();
            $table->string('class')->nullable();
            $table->string('reference_id')->nullable();
            $table->string('discriminante')->nullable();
            $table->string('custom1')->nullable();
            $table->string('custom2')->nullable();
            $table->string('custom3')->nullable();
            $table->string('custom4')->nullable();
            $table->timestamps();
            $table->unique(['sku','carro_id','discriminante']);
            $table->unique(['sku','order_id','discriminante']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shop__items', function (Blueprint $table) {
            $table->dropForeign(['user_id','carro_id','order_id','factura_id']);
        });
        Schema::dropIfExists('shop__items');
    }
}
