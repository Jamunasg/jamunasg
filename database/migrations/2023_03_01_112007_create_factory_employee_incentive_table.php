<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactoryEmployeeIncentiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factory_employee_incentive', function (Blueprint $table) {
            $table->id();
            $table->integer('factory_employee_id');
            $table->integer('year');
            $table->integer('month');
            $table->integer('incentive_unit');
            $table->integer('incentive_amount');
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
        Schema::dropIfExists('factory_employee_incentive');
    }
}
