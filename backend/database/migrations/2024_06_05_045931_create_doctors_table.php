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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
<<<<<<< Updated upstream
            $table->last_name();
            $table->specialization();
            $table->license_number();
            $table->phone();
            $table->email();
=======
            $table->string('last_name');
            $table->string('specialization');
            $table->int('license_number');
            $table->int('phone');
            $table->email('email');
>>>>>>> Stashed changes
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
        Schema::dropIfExists('doctors');
    }
};
