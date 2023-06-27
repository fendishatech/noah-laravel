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
        Schema::create('member_addresses', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('woreda')->nullable();
            $table->integer('houseNo')->nullable();
            $table->string('placeName')->nullable();
            $table->string('phoneNo2')->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->integer('cityId')->index('cityId');
            $table->integer('subCityId')->index('subCityId');
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
        Schema::dropIfExists('member_addresses');
    }
};
