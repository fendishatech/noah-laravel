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
        Schema::create('specialsaving_deposits', function (Blueprint $table) {
            $table->integer('id', true);
            $table->double('amount')->nullable();
            $table->string('voucher_no')->nullable()->unique('voucher_no')->comment('unique identifier for for the SpecialSaving deposit transaction');
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt');
            $table->integer('memberId')->index('memberId');
            $table->integer('SpecialSavingId')->index('SpecialSavingId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specialsaving_deposits');
    }
};
