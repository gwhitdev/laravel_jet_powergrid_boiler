<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('owners', function (Blueprint $table) {
            $table->foreignUuid('user_id')->constrained();
        });

        Schema::table('businesses', function (Blueprint $table) {
            $table->foreignUuid('owner_id')->constrained();
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreignUuid('business_id')->constrained();
            $table->foreignUuid('customer_id')->constrained();
            $table->foreignId('order_status_id')->constrained();
        });

        Schema::table('order_items', function (Blueprint $table) {
            $table->foreignUuid('order_id')->constrained();
        });

        Schema::table('items', function (Blueprint $table) {
            $table->foreignUuid('business_id')->constrained();
        });

        Schema::table('order_histories', function (Blueprint $table) {
            $table->foreignUuid('order_id')->constrained();
            $table->foreignId('order_status_id')->constrained();
            $table->foreignUuid('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('owners', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('businesses', function (Blueprint $table) {
            $table->dropForeign(['owner_id']);
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['business_id']);
            $table->dropForeign(['customer_id']);
            $table->dropForeign(['order_status_id']);
        });

        Schema::table('order_items', function (Blueprint $table) {
            $table->dropForeign(['order_id']);
        });

        Schema::table('items', function (Blueprint $table) {
            $table->dropForeign(['business_id']);
        });

        Schema::table('order_histories', function (Blueprint $table) {
            $table->dropForeign(['order_id']);
            $table->dropForeign(['user_id']);
            $table->dropForeign(['order_status_id']);
        });


    }
};
