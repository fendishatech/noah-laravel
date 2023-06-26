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
        Schema::create('member_ids', function (Blueprint $table) {
            $table->integer('id', true);
            $table->enum('id_type', ['public', 'license', 'passport']);
            $table->string('id_number');
            $table->string('id_img_path');
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt');
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
        Schema::dropIfExists('member_ids');
    }
};
