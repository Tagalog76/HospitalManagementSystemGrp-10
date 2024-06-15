<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->references('patient_id')->on('patients');
            $table->foreignId('doctor_id')->references('doctor_id')->on('doctors');
            $table->dateTime('appointment_date');
            $table->enum('status', ['pending', 'confirmed', 'completed', 'cancelled'])->default('scheduled');
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }
    

    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
