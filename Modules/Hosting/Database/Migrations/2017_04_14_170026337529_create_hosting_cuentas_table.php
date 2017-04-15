<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostingCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosting__cuentas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your fields
			$table->integer('user_id')->unsigned();
			$table->string('name');
            $table->string('domain');
            $table->integer('disklimit');
            $table->integer('bwlimit');
            $table->string('paquete');
			$table->integer('server')->unsigned();
            $table->integer('order_id')->unsigned();
            $table->string('paymentmethod');
            $table->float('firstpaymentamount');
            $table->float('amount');
            $table->string('billingcycle');
            $table->date('regdate');
            $table->date('nextduedate');
            $table->date('nextinvoicedate');
            $table->string('domainstatus');
            $table->string('username');
            $table->string('password');
            $table->text('notes')->nullable();
            $table->integer('promoid')->unsigned();
            $table->text('suspendreason')->nullable();
            $table->tinyInteger('overideautosuspend');
            $table->date('overidesuspenduntil')->nullable();
            $table->string('ip')->nullable();
            $table->string('ns1')->nullable();
            $table->string('ns2')->nullable();
            $table->integer('diskusage')->nullable();
            $table->integer('bwusage')->nullable();
			
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hosting__cuentas');
    }
}
