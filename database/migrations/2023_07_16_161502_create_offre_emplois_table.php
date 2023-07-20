<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffreEmploisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offre_emplois', function (Blueprint $table) {
            $table->id();
            $table->string('descriptionOfr');
            $table->date('dateDebutOfr');
            $table->date('dateFinOfr');
            $table->string('entrepriseOfr');
            $table->string('statutOfr');
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
        Schema::dropIfExists('offre_emplois');
    }
}
