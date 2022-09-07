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
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')
                ->references('id')
                ->on('owners')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('pet_id');
            $table->foreign('pet_id')
                ->references('id')
                ->on('pets')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('reason_id');
            $table->foreign('reason_id')
                ->references('id')
                ->on('services')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->foreign('doctor_id')
                ->references('id')
                ->on('doctors')
                ->onUpdate('cascade');
            $table->date('date');
            $table->time('time');
            $table->string('comment')->nullable();
            $table->string('image_name')->nullable();
            $table->string('path')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('pending')->default(0);
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
