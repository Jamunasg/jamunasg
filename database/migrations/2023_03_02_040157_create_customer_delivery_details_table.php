<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerDeliveryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_delivery_details', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_details_id');
            $table->text('delivery_address');
            $table->integer('delivery_city_id');
            $table->integer('delivery_district_id');
            $table->integer('delivery_state_id');
            $table->integer('delivery_location_gps');
            $table->integer('delivery_x_latitude');
            $table->integer('delivery_y_longitude');
            $table->integer('created_by_id');
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
        Schema::dropIfExists('customer_delivery_details');
    }
}
