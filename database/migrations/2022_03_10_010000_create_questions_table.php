<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {//Se crea tabla para almacenar preguntas
            $table->id();
            $table->unsignedBigInteger('id_test');
            $table->string('question', 100);
            $table->string('answer', 300);
            $table->boolean('isOpen');
            $table->timestamps();

            $table->foreign('id_test')->references('id')->on('test')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
