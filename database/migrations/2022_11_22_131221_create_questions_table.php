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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->string('recomendation');
            $table->string('type')->nullable();
            $table->unsignedBigInteger('risk_management_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('level_id');
            $table->timestamps();

            $table->foreign('risk_management_id')->references('id')->on('risk_managements');
            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('category_id')->references('id')->on('categories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
};
