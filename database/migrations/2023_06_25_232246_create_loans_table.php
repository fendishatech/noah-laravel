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
        Schema::create('loans', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('acc_no')->nullable()->unique('acc_no');
            $table->string('voucher_no')->nullable()->unique('voucher_no')->comment('unique identifier for for the loan transaction');
            $table->double('principal_amount')->nullable()->comment('The initial amount of loan');
            $table->integer('duration_mn')->nullable()->comment('the total duration of the loan in months.');
            $table->double('total_principal_paid')->nullable()->comment('the amount of paid loan money that eventually increases to principal amount borrowed money');
            $table->double('total_interest_paid')->nullable()->comment('the amount of money that is paid as interest, or accrued interest paid');
            $table->double('outstanding_balance')->nullable()->comment('total amount of money you owe, including accrued interest (remaining_amount + accrued interest)');
            $table->double('remaining_balance')->nullable()->comment('the remaining balance on the loan, difference of the principal and accrued interest (principal_amount - total_principal_paid)');
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
        Schema::dropIfExists('loans');
    }
};
