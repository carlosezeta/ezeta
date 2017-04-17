<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopCouponTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop__coupon_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('coupon_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['coupon_id', 'locale']);
            $table->foreign('coupon_id')->references('id')->on('shop__coupons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shop__coupon_translations', function (Blueprint $table) {
            $table->dropForeign(['coupon_id']);
        });
        Schema::dropIfExists('shop__coupon_translations');
    }
}
