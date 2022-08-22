<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('pet_name');
            $table->string('pet_type');
            $table->string('age');
            $table->string('breed');
            $table->string('reason');
            $table->date('date');
            $table->time('time');
            $table->string('address');
            $table->string('email');
            $table->string('number');
            $table->string('message');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('appointments');
    }
}
