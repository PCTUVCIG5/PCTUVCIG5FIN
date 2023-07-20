<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivocesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divoces', function (Blueprint $table) {
            $table->id();
            $table->date('divoces_date');
            $table->string('divoces_lieu');;
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
        Schema::dropIfExists('divoces');
    }
}
