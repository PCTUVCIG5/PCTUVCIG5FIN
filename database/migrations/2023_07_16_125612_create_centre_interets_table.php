<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentreInteretsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centre_interets', function (Blueprint $table) {
            $table->id();
            $table->string('idHom');
            $table->string('typeCeIn');
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
        Schema::dropIfExists('centre_interets');
    }
}
