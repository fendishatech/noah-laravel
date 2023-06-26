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
        Schema::create('interests', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name')->nullable()->unique('name');
            $table->double('percentage')->nullable()->unique('percentage');
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt');
            $table->integer('interestId')->index('interestId')->comment('The basic interest rate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interests');
    }
};
