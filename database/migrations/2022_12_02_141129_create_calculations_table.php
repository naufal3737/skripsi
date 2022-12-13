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
        Schema::create('calculations', function (Blueprint $table) {
            $table->id();
            $table->integer('penatapan_konteks');
            $table->integer('identifikasi_risiko');
            $table->integer('analisis_risiko');
            $table->integer('perencanaan_manajemen_risiko');
            $table->integer('komunikasi_risiko');
            $table->integer('mitigasi_risiko');
            $table->integer('pemantauan_risiko');
            $table->integer('evaluasi_risiko');
            $table->unsignedBigInteger('level_id');
            $table->unsignedBigInteger('audit_id');
            $table->timestamps();

            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('audit_id')->references('id')->on('audits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calculations');
    }
};
