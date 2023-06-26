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
        Schema::table('emergency_contact', function (Blueprint $table) {
            $table->foreign(['cityId'], 'emergency_contact_ibfk_1')->references(['id'])->on('cities')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['memberId'], 'emergency_contact_ibfk_3')->references(['id'])->on('members')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['subCityId'], 'emergency_contact_ibfk_2')->references(['id'])->on('sub_cities')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emergency_contact', function (Blueprint $table) {
            $table->dropForeign('emergency_contact_ibfk_1');
            $table->dropForeign('emergency_contact_ibfk_3');
            $table->dropForeign('emergency_contact_ibfk_2');
        });
    }
};
