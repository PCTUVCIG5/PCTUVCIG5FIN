<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHommesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hommes', function (Blueprint $table) {
            $table->id();
            $table->string('nomHomm');
            $table->string('prenHomm');
            $table->date('dateNHomm');
            $table->string('lieuNHomm');
            $table->string('sexeHomm');
            $table->string('telHomm');
            $table->string('image');
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
        Schema::dropIfExists('hommes');
    }
}
