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
        Schema::table('loan_payments', function (Blueprint $table) {
            $table->foreign(['memberId'], 'loan_payments_ibfk_1')->references(['id'])->on('members')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['loanId'], 'loan_payments_ibfk_2')->references(['id'])->on('loans')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('loan_payments', function (Blueprint $table) {
            $table->dropForeign('loan_payments_ibfk_1');
            $table->dropForeign('loan_payments_ibfk_2');
        });
    }
};
