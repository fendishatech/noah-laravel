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
        Schema::create('specialsavings', function (Blueprint $table) {
            $table->comment('SpecialSaving account of a member');
            $table->integer('id', true);
            $table->string('acc_no')->nullable()->unique('acc_no');
            $table->double('amount')->nullable();
            $table->integer('duration')->nullable()->comment('Total time that the specialSaving money should be returned in.');
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
        Schema::dropIfExists('specialsavings');
    }
};
