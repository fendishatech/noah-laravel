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
        Schema::create('loan_payments', function (Blueprint $table) {
            $table->integer('id', true);
            $table->double('amount')->nullable();
            $table->string('voucher_no')->nullable()->unique('voucher_no')->comment('unique identifier for for the loan transaction');
            $table->double('acquired_interest');
            $table->double('remaining_balance');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->integer('memberId')->index('memberId');
            $table->integer('loanId')->index('loanId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_payments');
    }
};
