<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNaissancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naissances', function (Blueprint $table) {
            $table->id();
            $table->string('nom_nais');
            $table->string('prenoms_nais');
            $table->date('dateNaissance_nais');
            $table->string('lieuNaissance_nais');
            $table->string('mode_nais');
            $table->string('lieuHabitation_nais');
            $table->string('statutChef');
            $table->SoftDeletes();
            $table->timestamps();

            $table->unsignedBigInteger('homme_id'); 
            $table->foreign('homme_id')->references('id')->on('hommes');

            $table->unsignedBigInteger('femme_id'); 
            $table->foreign('femme_id')->references('id')->on('femmes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('naissances');
    }
}
