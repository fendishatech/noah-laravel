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
        Schema::create('children', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('first_name')->nullable()->unique('first_name');
            $table->string('father_name')->nullable()->unique('father_name');
            $table->string('mother_name')->nullable()->unique('mother_name');
            $table->dateTime('dob')->nullable();
            $table->double('total_saving')->nullable();
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('children');
    }
};
