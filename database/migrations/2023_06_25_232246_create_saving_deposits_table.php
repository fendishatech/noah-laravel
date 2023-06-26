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
        Schema::create('saving_deposits', function (Blueprint $table) {
            $table->integer('id', true);
            $table->double('amount')->nullable();
            $table->double('duration')->nullable()->comment('How much time in months the paid amounts accounts for');
            $table->string('voucher_no')->nullable()->unique('voucher_no')->comment('unique identifier for for the saving deposit transaction');
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt');
            $table->integer('memberId')->index('memberId');
            $table->integer('savingId')->index('savingId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saving_deposits');
    }
};
