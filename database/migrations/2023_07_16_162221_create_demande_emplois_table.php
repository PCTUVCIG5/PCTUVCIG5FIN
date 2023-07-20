<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeEmploisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_emplois', function (Blueprint $table) {
            $table->id();
            $table->string('descriptionDman');
            $table->string('cvDman');
            $table->date('dateDman');
            $table->string('statutDman');
            $table->SoftDeletes();
            $table->timestamps();

            $table->unsignedBigInteger('habitant_id'); 
            $table->foreign('habitant_id')->references('id')->on('habitants');

            $table->unsignedBigInteger('offre_emploi_id'); 
            $table->foreign('offre_emploi_id')->references('id')->on('offre_emplois');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demande_emplois');
    }
}
