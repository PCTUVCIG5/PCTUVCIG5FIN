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
            $table->bigIncrements('id');
            $table->SoftDeletes();
            $table->timestamps();


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
        Schema::dropIfExists('femmes');
    }
}
