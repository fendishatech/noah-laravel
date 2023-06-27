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
        Schema::create('savings', function (Blueprint $table) {
            $table->comment('Saving account of a member');
            $table->integer('id', true);
            $table->string('acc_no')->nullable()->unique('acc_no');
            $table->double('amount')->nullable();
            $table->double('total_saving')->nullable()->comment('Total saving money with out interest');
            $table->double('outstanding_balance')->nullable()->comment('Current total saving amount including interest');
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
        Schema::dropIfExists('savings');
    }
};
