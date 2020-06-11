<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('phone_number')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('next_of_kin_first_name');
            $table->string('next_of_kin_last_name');
            $table->string('next_of_kin_email')->nullable();
            $table->string('next_of_kin_phone');
            $table->bigInteger('role_id');
            $table->integer('id_number')->nullable();
            $table->integer('license_document')->nullable();
            $table->string('license_no')->nullable();
            $table->boolean('is_verified')->nullable();
            $table->boolean('is_suspended')->nullable();
            $table->bigInteger('hospital_id')->nullable();
            $table->string('specialization')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
