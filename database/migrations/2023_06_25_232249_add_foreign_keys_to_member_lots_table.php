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
        Schema::table('member_lots', function (Blueprint $table) {
            $table->foreign(['memberId'], 'member_lots_ibfk_1')->references(['id'])->on('members')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('member_lots', function (Blueprint $table) {
            $table->dropForeign('member_lots_ibfk_1');
        });
    }
};
