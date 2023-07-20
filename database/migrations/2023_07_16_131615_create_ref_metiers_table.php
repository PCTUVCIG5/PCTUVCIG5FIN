<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefMetiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_metiers', function (Blueprint $table) {
            $table->id();
            $table->SoftDeletes();
            $table->timestamps();

            $table->unsignedBigInteger('metier_id'); 
            $table->foreign('metier_id')->references('id')->on('metiers');

            $table->unsignedBigInteger('habitant_id'); 
            $table->foreign('habitant_id')->references('id')->on('habitants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_metiers');
    }
}
