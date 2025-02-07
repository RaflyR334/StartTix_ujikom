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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug');
            $table->text('deskripsi');
            $table->unsignedBigInteger('genre_id');
            $table->date('tahun_rilis');
            $table->string('poster');
            $table->string('durasi');
            $table->integer('age_rating');
            $table->integer('harga');
            $table->enum('status', ['coming_soon', 'playing', 'ended'])->nullable()->default('coming_soon');
            $table->string('trailer');

            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
};

