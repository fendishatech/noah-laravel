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
        Schema::create('loan_requests', function (Blueprint $table) {
            $table->integer('id', true);
            $table->double('amount');
            $table->integer('duration_mn')->nullable();
            $table->enum('status', ['pending', 'confirmed', 'denied']);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->integer('memberId')->index('memberId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_requests');
    }
};
