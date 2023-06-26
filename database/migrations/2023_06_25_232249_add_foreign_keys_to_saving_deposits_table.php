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
        Schema::table('saving_deposits', function (Blueprint $table) {
            $table->foreign(['memberId'], 'saving_deposits_ibfk_1')->references(['id'])->on('members')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['savingId'], 'saving_deposits_ibfk_2')->references(['id'])->on('savings')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('saving_deposits', function (Blueprint $table) {
            $table->dropForeign('saving_deposits_ibfk_1');
            $table->dropForeign('saving_deposits_ibfk_2');
        });
    }
};
