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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('first_name');
            $table->string('father_name');
            $table->string('last_name');
            $table->string('email')->unique('email');
            $table->string('password');
            $table->string('phone_no')->unique('phone_no');
            $table->string('avatar')->nullable();
            $table->enum('user_role', ['admin', 'user']);
            $table->text('refresh_token')->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
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
};
