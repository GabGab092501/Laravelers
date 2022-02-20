<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disease_injuries', function (Blueprint $table) {
            $table->increments('id');
            $table->string(column: 'classify');
            $table->unsignedInteger(column: 'animals_id');
            $table->timestamps();
            $table->foreign('animals_id')->references('animals_id')->on('animals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disease_injuries');
    }
};