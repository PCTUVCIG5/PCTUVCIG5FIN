<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmenagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenagements', function (Blueprint $table) {
            $table->id();
            $table->date('dateAme');
            $table->string('ancienQtier');
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
        Schema::dropIfExists('amenagements');
    }
}
