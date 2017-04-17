<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop__facturas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your fields
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->integer('order_id')->unsigned()->nullable();
            $table->string('direccion1')->nullable();
            $table->string('direccion2')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('provincia')->nullable();
            $table->string('cp')->nullable();
            $table->string('country')->nullable();
            $table->integer('status_id')->unsigned()->default(0);
            $table->decimal('importe_abonado',20,2);
            $table->decimal('importe_pendiente',20,2);
            $table->decimal('totalPrice',20,2);
            $table->decimal('totalTax',20,2);
            $table->decimal('totalShipping',20,2);
            $table->decimal('total',20,2);
            $table->decimal('totalDisccount',20,2);
            $table->dateTime('fecha_vencimiento')->nullable();
            $table->timestamp('fecha_pago')->nullable();
            $table->text('comentarios')->nullable;
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shop__facturas', function (Blueprint $table) {
            $table->dropForeign(['user_id','order_id']);
        });
        Schema::dropIfExists('shop__facturas');
    }
}
