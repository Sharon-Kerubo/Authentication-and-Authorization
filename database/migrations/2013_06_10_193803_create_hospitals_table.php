<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->text('overview');
            $table->string('address');
            $table->integer('emergency_number_one');
            $table->integer('emergency_number_two')->nullable();
            $table->integer('helpline')->nullable();
            $table->string('cover_image');
            $table->text('how_to_reach_us')->nullable();
            $table->bigInteger('to  wn_id');
            $table->text('services');
            $table->text('facilities');
            $table->boolean('is_suspended')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('hospitals');
    }
}
