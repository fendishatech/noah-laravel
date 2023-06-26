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
        Schema::table('members', function (Blueprint $table) {
            $table->foreign(['memberTypeId'], 'members_ibfk_1')->references(['id'])->on('member_types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['memberEduId'], 'members_ibfk_2')->references(['id'])->on('member_edus')->onUpdate('CASCADE')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropForeign('members_ibfk_1');
            $table->dropForeign('members_ibfk_2');
        });
    }
};
