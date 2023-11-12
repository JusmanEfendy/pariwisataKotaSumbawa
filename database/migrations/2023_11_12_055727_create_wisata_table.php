<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisata', function (Blueprint $table) {
            $table->id();
            $table->string('NamaWisata');
            $table->string('KodeKategori');
            $table->text('LokasiWisata');
            $table->text('Fasilitas')->nullable();
            $table->text('Deskripsi')->nullable();
            $table->string('Image')->nullable();
            $table->string('Lat');
            $table->string('Lng');
            $table->timestamps();

            $table->foreign('KodeKategori')->references('KodeKategori')->on('kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wisata');
    }
}
