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
        Schema::table('specialsavings', function (Blueprint $table) {
            $table->foreign(['memberId'], 'specialsavings_ibfk_1')->references(['id'])->on('members')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('specialsavings', function (Blueprint $table) {
            $table->dropForeign('specialsavings_ibfk_1');
        });
    }
};
