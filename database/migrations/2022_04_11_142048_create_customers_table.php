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
        Schema::create('customers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();
            $table->string('first_name')->nullable(false);
            $table->string('last_name')->nullable(false);
            $table->string('address_number_name')->default(' ');
            $table->string('address_line_one')->default('Address line one');
            $table->string('address_line_two')->default('Address line two');
            $table->string('postcode')->default('Postcode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
