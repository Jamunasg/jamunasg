<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->text('emp_name');
            $table->integer('emp_mobile_1');
            $table->integer('emp_mobile_2');
            $table->integer('emp_whatsapp');
            $table->text('emp_email');
            $table->text('emp_photo');
            $table->date('emp_DOB');
            $table->date('emp_joindate');
            $table->text('emp_gender');
            $table->text('emp_marital_status');
            $table->text('emp_physical_status');
            $table->text('emp_education');
            $table->text('emp_languages_known');
            $table->text('emp_communication_address');
            $table->integer('emp_city_id');
            $table->integer('emp_district_id');
            $table->integer('emp_state_id');
            $table->text('emp_proof_type');
            $table->text('valid_check_status');
            $table->text('file_1_front');
            $table->text('file_1_back');
            $table->boolean('is_active');
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
        Schema::dropIfExists('employee');
    }
}
