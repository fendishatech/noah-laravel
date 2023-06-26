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
        Schema::table('child_addresses', function (Blueprint $table) {
            $table->foreign(['cityId'], 'child_addresses_ibfk_1')->references(['id'])->on('cities')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['childId'], 'child_addresses_ibfk_3')->references(['id'])->on('children')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['subCityId'], 'child_addresses_ibfk_2')->references(['id'])->on('sub_cities')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('child_addresses', function (Blueprint $table) {
            $table->dropForeign('child_addresses_ibfk_1');
            $table->dropForeign('child_addresses_ibfk_3');
            $table->dropForeign('child_addresses_ibfk_2');
        });
    }
};
