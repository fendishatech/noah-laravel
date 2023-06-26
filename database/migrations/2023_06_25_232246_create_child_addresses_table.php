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
        Schema::create('child_addresses', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('woreda')->nullable();
            $table->integer('houseNo')->nullable();
            $table->string('placeName')->nullable();
            $table->string('phoneNo2')->nullable();
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt');
            $table->integer('cityId')->index('cityId');
            $table->integer('subCityId')->index('subCityId');
            $table->integer('childId')->index('childId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('child_addresses');
    }
};
