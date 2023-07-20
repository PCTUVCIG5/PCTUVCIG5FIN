<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentreSantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centre_santes', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('typeCent');
            $table->string('statutCent');
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
        Schema::dropIfExists('centre_santes');
    }
}
