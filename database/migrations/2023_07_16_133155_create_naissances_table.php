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
            $table->string('prefecture');
            $table->string('centretatcivil');
            $table->string('registre');
            $table->string('acte');
            $table->date('date_acte');
            $table->string('nom');
            $table->string('prenom');
            $table->string('delivre_a');
            $table->date('delivre_le');
            $table->string('delivre_an');
            $table->string('num_serie');
            $table->string('naissance_jour_moi');
            $table->string('naissance_an');
            $table->string('naissance_heure');
            $table->string('naissance_minuite');
            $table->string('naissance_nom_prenom');
            $table->string('naissance_lieu');
            $table->string('naissance_sexe');
            $table->string('declaration_faite_par');
            $table->string('declaration_recue_pa');
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
