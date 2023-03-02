<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_details', function (Blueprint $table) {
            $table->id();
            $table->text('customer_name');
            $table->integer('customer_mobile_1');
            $table->integer('customer_mobile_2');
            $table->integer('customer_whatsapp');
            $table->text('customer_address');
            $table->text('customer_email');
            $table->integer('customer_city_id');
            $table->integer('customer_district_id');
            $table->integer('customer_state_id');
            $table->integer('cread_by_id');
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
        Schema::dropIfExists('customer_details');
    }
}
