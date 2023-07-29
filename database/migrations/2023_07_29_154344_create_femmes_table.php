<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFemmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('femmes', function (Blueprint $table) {
            $table->id();
            $table->string('nomFemm');
            $table->string('prenFemm');
            $table->date('dateNFemm');
            $table->string('lieuNFemm');
            $table->string('sexeFemm');
            $table->string('telFemm');
            $table->string('image');
            $table->SoftDeletes();
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
        Schema::dropIfExists('femmes');
    }
}
