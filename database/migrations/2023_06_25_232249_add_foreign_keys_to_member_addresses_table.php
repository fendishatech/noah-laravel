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
        Schema::table('member_addresses', function (Blueprint $table) {
            $table->foreign(['cityId'], 'member_addresses_ibfk_1')->references(['id'])->on('cities')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['memberId'], 'member_addresses_ibfk_3')->references(['id'])->on('members')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['subCityId'], 'member_addresses_ibfk_2')->references(['id'])->on('sub_cities')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('member_addresses', function (Blueprint $table) {
            $table->dropForeign('member_addresses_ibfk_1');
            $table->dropForeign('member_addresses_ibfk_3');
            $table->dropForeign('member_addresses_ibfk_2');
        });
    }
};
